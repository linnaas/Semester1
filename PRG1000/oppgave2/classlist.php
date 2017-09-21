<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Vis klasseliste</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "classlist"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<h1>Vis klasseliste</h1>
		<form action="showclasslist.php" method="post">
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
																			print("<select name='klasseliste'>");
																			for ($i = 0; $i < $length; $i++){
																							print( "<option value=".$final_array[$i][0].">".$final_array[$i][0]."</option>");
																							}
																							print("</select>");
											?><br>
			<input name="submit" type="submit" value="Vis"> <input name="reset" type="reset" value="Nullstill">
		</form>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
