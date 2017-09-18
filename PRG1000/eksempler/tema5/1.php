<html>
<head>
<title>Oppgave 1</title>
</head>
<body>
<h3>Klassekoden skal bestå av nøyaktig 3 tegn</h3>
<form action="" method="post">
<input type="text" name="klassekode"><br>
<input type="submit" name="submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
$klassekode = $_POST["klassekode"];
if (strlen($klassekode) != 3 || !$klassekode){
  print("Klassekoden du skrev var ikke 3 tegn");
} else {
  print("Klassekoden du skrev er gyldig da den består av 3 tegn");
}
}

 ?>
