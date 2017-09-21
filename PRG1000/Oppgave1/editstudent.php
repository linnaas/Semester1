<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Rediger student.txt</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "editstudent"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<?php

		        if (isset($_POST["tekst"])) {
		        $file = fopen("student.txt", "w"); // Åpne tekstfilen
		        $nydata = $_POST["tekst"];
		        fwrite($file, $nydata);
		        fclose($file);

		        }

		        if(file_exists("student.txt")){
		        $data = file_get_contents("student.txt");
		        }
		        ?>
		<h1>Rediger student.txt</h1>
		<form action="editstudent.php" method="post">
			<textarea cols="68" name="tekst" rows="34"><?php print("$data") ?></textarea><br>
			<input name="submit" type="submit" value="Lagre">
		</form>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
