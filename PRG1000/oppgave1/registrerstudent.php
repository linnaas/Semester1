<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Registrer student</title>
</head>
<body>
		<h1>Registrer student</h1>
		<form action="" method="post">
		<table>
			  <tr>
			    <td><label for="brukernavn">Brukernavn:</label></td>
			    <td><input name="brukernavn" placeholder="Brukernavn" type="text" required><br></td>
			  </tr>
			  <tr>
			    <td><label for="fornavn">Fornavn:</label></td>
			    <td><input name="fornavn" placeholder="Fornavn" type="text" required><br></td>
			  </tr>
			  <tr>
			    <td><label for="etternavn">Etternavn:</label></td>
			    <td><input name="etternavn" placeholder="Etternavn" type="text" required><br></td>
			  </tr>
				<tr>
			    <td><label>Klassekode:</label></td>
			    <td>
					<?php
						$data = file_get_contents('klasse.txt'); // Gir variablen $data innholdet av "Student.txt" filen
						$data = str_replace(array("\r"), '', $data);
						$data = explode("\n", $data);
						$data = array_filter($data);
						$final_array = array();
						foreach($data AS $row){
							$final_array[] = explode(';', $row);
						}
						$length = count($final_array);
						print("<select style='width: 100%;' name='klasse'>");
						for ($i = 0; $i < $length; $i++){
							print( "<option value=".$final_array[$i][0].">".$final_array[$i][0]."</option>");
						}
							print("</select>");
						?>
				</td>
			  </tr>
				<tr>
					<td colspan="2">
						<input name="submit" type="submit" value="Registrer">
						<input name="reset" type="reset" value="Nullstill">
					</td>
				</tr>
</table>
		</form>
</body>
<?php
if(isset($_POST["submit"])){
	$brukernavn = $_POST["brukernavn"]; // Brukernavn = Brukernavn fra input felt
	$fornavn = $_POST["fornavn"]; // Fornavn = Fornavn fra input felt
	$etternavn = $_POST["etternavn"]; // Etternavn = Etternavn fra input felt
	$klasse = $_POST["klasse"]; //Klasse = Klasse fra input felt
	$student = $brukernavn . ";" . $fornavn . ";" . $etternavn . ";" . $klasse . ";" . "\n"; // Sett sammen alle "strings" til en for bedre oversikt. \n = linjeskift
	$lovligbrukernavn = true;
	$lovligfornavn = true;
	$lovligetternavn = true;
	$lovligklasse = true;

	if(!$brukernavn){
		$lovligbrukernavn = false;
		print("Brukernavn er ikke fylt ut<br>");
	}
	if(!$fornavn){
		$lovligfornavn = false;
		print("Fornavn er ikke fylt ut<br>");
	}
	if(!$etternavn){
		$lovligetternavn = false;
		print("Etternavn er ikke fylt ut<br>");
	}
	if(!$klasse){
		$lovligklasse = false;
		print("Klasse er ikke fylt ut<br>");
	}
	if ($lovligbrukernavn && $lovligfornavn && $lovligetternavn && $lovligklasse){
	$myfile = fopen("student.txt", "a+"); // Åpne tekstfilen, "a+" (Read/Write. Preserves file content by writing to the end of the file)
	fwrite($myfile, $student); // Skriver variablen $student på ny linje
	fclose($myfile); // Lukk filen
	print("Følgende student er nå registrert<br>"); // Tilbakemelding at student er registrert
	print("<table border='1'; style='border-collapse: collapse'><tr><td><strong>Brukernavn</strong></td><td><strong>Fornavn</strong><td><strong>Etternavn</strong><td><strong>Klassekode</strong></tr></th>");
	print("<tr><td width='200px;'>$brukernavn</td><td td width='200px;'>$fornavn</td><td td width='200px;'>$etternavn</td><td td width='200px;'>$klasse</td></tr></table>");// Hvilken student ble registrert?
	print("<br><a href=visstudenter.php>Vis alle studenter</a>"); //Link til index.html
	} else {
		print("<br>Vennligst rett feilene over");
	}
}
 ?>
</html>
