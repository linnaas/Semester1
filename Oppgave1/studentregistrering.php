<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
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
	<?php $page = "registerstudent"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<?php
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
		print("<br><a href=showstudent.php>Vis studenter</a>"); //Link til index.html
		} else {
		  print("<br><a href='registerstudent.php'>Gå tilbake</a>");
		}
		 ?>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
