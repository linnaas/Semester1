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
	<?php
					 $page = "classlist"; // Gir variablen $page verdi slik at riktig elemnt får class=active i navigasjonsbaren
					 $klasseliste = $_POST["klasseliste"]; // Gir variablen $klasseliste verdien av inputfelt "klasseliste" i "lower case"
					 ?>
	<div class="flex-container">
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<h1>Alle studenter i klasse <?php print("$klasseliste"); ?></h1>
							<?php
										$antall = 0; //antall studenter
		                $data = file_get_contents('student.txt'); // Gir variablen $data innholdet av "Student.txt" filen
		                $data = str_replace(array("\r"), '', $data);
		                $data = explode("\n", $data);
		                $data = array_filter($data);
		                $final_array = array();

		                foreach($data AS $row){
		                    $final_array[] = explode(';', $row);

		                }
								?>
		<table border="1" style="border-collapse: collapse">
			<tbody>
				<tr>
					<td width="200px"><strong>Brukernavn</strong></td>
					<td width="200px"><strong>Fornavn</strong></td>
					<td width="200px"><strong>Etternavn</strong></td>
					<td width="200px"><strong>Klassekode</strong></td>
				</tr>
				<?php
				 $length = count($final_array);
				 for ($i = 0; $i < $length; $i++){
				 if($klasseliste == $final_array[$i][3]){
					 $antall ++; //tell antall studenter
					 echo '<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</td><td>".$final_array[$i][3]."</td></tr>"; // Print ut hver student med riktig klassekode
				      }
						}?>
			</tbody>
		</table><?php print("<br>Vi fant totalt $length studenter registrert i systemet. $antall stk er i klasse $klasseliste");?>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
