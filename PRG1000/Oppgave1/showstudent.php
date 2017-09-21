<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Alle studenter</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "showstudent"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<h1>Alle studenter</h1>
		<?php
										$data = file_get_contents('student.txt'); // Gir variablen $data innholdet av "Student.txt" filen
										$data = str_replace(array("\r"), '', $data);
										$data = explode("\n", $data);
										$data = array_filter($data);
										$final_array = array();
														$antall = 0; //antall studenter
										foreach($data AS $row){
												$final_array[] = explode(';', $row);
										}?>
		<table border="1" style="border-collapse: collapse">
			<tbody>
				<tr>
					<td width="200px"><strong>Brukernavn</strong></td>
					<td width="200px"><strong>Fornavn</strong></td>
					<td width="200px"><strong>Etternavn</strong></td>
					<td width="200px"><strong>Programkode</strong></td>
				</tr><?php
																$length = count($final_array);

																for ($i = 0; $i < $length; $i++){
																				echo '<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</td><td>".$final_array[$i][3]."</td></tr>"; // Print ut hver student med riktig klassekode
																														}?>
			</tbody>
		</table>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
