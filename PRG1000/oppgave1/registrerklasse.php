<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Registrer klasse</title>
</head>
<body>
		<h1>Registrer klasse</h1>
		<form action="" method="post">
			<table>
				  <tr>
				    <td><label for="klassekode">Klassekode:</label></td>
				    <td><input name="klassekode" placeholder="Klassekode" type="text" required></td>
				  </tr>
				  <tr>
				    <td><label for="klassenavn">Klassenavn</label></td>
				    <td><input name="klassenavn" placeholder="Klassenavn" type="text" required></td>
				  </tr>
					<tr>
						<td colspan="2">
							<input name="submit" type="submit" value="Registrer">
							<input name="reset" type="reset" value="Nullstill"></td>
					</tr>
	</table>
		</form>
</body>
<?php
if (isset($_POST["submit"])){
	$klassekode = $_POST["klassekode"]; // Deklarerer fornavnet
	$klassenavn = $_POST["klassenavn"]; // Deklarerer etternavnet
	$lovligklassekode = true;
	$lovligklassenavn = true;
	if(!$klassekode){
		$lovligklassekode = false;
		print("Klassekode er ikke fylt ut<br>");
	} else if (strlen($klassekode) !=3 ){
		$lovligklassekode = false;
		print("Klassekoden skal bestå av 3 tegn<br>");
	}
	if(!$klassenavn){
		$lovligklassenavn = false;
		print("Klassenavn er ikke fylt ut<br>");
	}
	if ($lovligklassenavn && $lovligklassekode){
		$klasse = $klassekode . ";" . $klassenavn . ";" . "\n"; // Sett sammen alle "strings" til en for bedre oversikt. \n = linjeskift
		$file = fopen("klasse.txt", "a+"); // Åpne tekstfilen, "a+" (Read/Write. Preserves file content by writing to the end of the file)
		fwrite($file, $klasse); // Skriver variablen $student på ny linje
		fclose($file); // Lukk filen
		print("Følgende klasse er nå registrert<br>"); // Tilbakemelding at student er registrert
		print("<table border='1'; style='border-collapse: collapse'><tr><td><strong>Klassekode</strong></td><td><strong>Klassenavn</strong></tr></th>");
		print("<tr><td width='200px;'>$klassekode</td><td td width='200px;'>$klassenavn</td></tr></table>");// Hvilken student ble registrert?
		print("<br><a href=visklasser.php>Vis alle klasser</a>"); //Link til index.html
	} else {
		print("<br>Vennligst rett feilene over");
	}
}
?>
</html>
