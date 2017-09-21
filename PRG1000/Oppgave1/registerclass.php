<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="style/style.css?v4" rel="stylesheet" type="text/css">
	<title>Registrer klasse</title>
</head>
<body>
	<div class="flex-container">
	<?php $page = "registerclass"; ?>
	<header>
	  <h1>Obligatorisk oppgave 1 og 2</h1>
	</header>
	<?php include 'navigation.php';?>
	<article class="content">
		<h1>Registrer klasse</h1>
		<form action="classregister.php" method="post" onsubmit="return klasseValidation()" id="klasseForm">
			<table>
				  <tr>
				    <td><label for="klassekode">Klassekode:</label></td>
				    <td><input name="klassekode" placeholder="Klassekode" type="text" id="klassekode" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required></td>
				  </tr>
				  <tr>
				    <td><label for="klassenavn">Klassenavn</label></td>
				    <td><input name="klassenavn" placeholder="Klassenavn" type="text" id="klassenavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required></td>
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
<script type="text/javascript" src="script/formvalidation.js"></script>
<script type="text/javascript" src="script/style.js"></script>
</html>
