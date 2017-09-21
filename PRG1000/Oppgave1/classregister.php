<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Oppgave 1</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "registerclass"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<?php
		$klassekode = $_POST["klassekode"]; // Deklarerer fornavnet
		$klassenavn = $_POST["klassenavn"]; // Deklarerer etternavnet
		$lovligklassekode = true;
		$lovligklassenavn = true;
		if(!$klassekode){
		 $lovligklassekode = false;
		 print("Klassekode er ikke fylt ut<br>");
		} else if (strlen($klassekode) !=4 ){
		 $lovligklassekode = false;
		 print("Klassekoden skal bestå av 4 tegn<br>");
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
		print("<br><a href=showclass.php>Vis klasser</a>"); //Link til index.html
		} else {
		 print("<br><a href='registerclass.php'>Gå tilbake</a>");
		}
		?>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
