<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Registrer student</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "registerstudent"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<h1>Registrer student</h1>
		<form action="studentregistrering.php" method="post" onsubmit="return studentValidation()" id="studentForm">
		<table>
			  <tr>
			    <td><label for="brukernavn">Brukernavn:</label></td>
			    <td><input name="brukernavn" placeholder="Brukernavn" type="text" id="brukernavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required><br></td>
			  </tr>
			  <tr>
			    <td><label for="fornavn">Fornavn:</label></td>
			    <td><input name="fornavn" placeholder="Fornavn" type="text" id="fornavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required><br></td>
			  </tr>
			  <tr>
			    <td><label for="etternavn">Etternavn:</label></td>
			    <td><input name="etternavn" placeholder="Etternavn" type="text" id="etternavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required><br></td>
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
					<td colspan="2"><input name="nullstill" type="submit" value="Registrer"> <input name="reset" type="reset" value="Nullstill"></td>
				</tr>
</table>
		</form>
		<div id="melding"></div>
		</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
<script type="text/javascript" src="script/formvalidation.js?v2"></script>
<script type="text/javascript" src="script/style.js?v1"></script>
</html>
