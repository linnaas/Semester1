<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Hjem</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "home"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
  	<h2>Brukerfunksjoner</h2>
  <ul>
    <li><a href="registerclass.php">Registrer klasse</a></li>
    <li><a href="showclass.php">Vis alle klasser</a></li>

    <li><a href="registerstudent.php">Registrer student</a></li>
    <li><a href="showstudent.php">Vis alle studenter</a></li>
    <li><a href="classlist.php">Vis klasselsite</a></li>
  </ul>
  <h2>Tekstfiler</h2>
  <ul>
    <li><a href="klasse.txt">klasse.txt<a/></li>
    <li><a href="student.txt">student.txt<a/></li>
  </ul>
<h2>Rediger tekstfiler</h2>
<ul>
    <li><a href="editclass.php">Rediger klasser</a></li>
    <li><a href="editstudent.php">Rediger studenter</a></li>
</ul>
	</article>
	<footer>Laget av Petter Hanssen</footer>
</div>
</body>
</html>
