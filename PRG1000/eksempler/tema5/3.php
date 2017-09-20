<html>
<head>
<title>Oppgave 3</title>
</head>
<body>
<h3>Postnr skal bestå av nøyaktig 4 tall</h3>
<form action="" method="post">
<input type="text" name="postnr"><br>
<input type="submit" name="submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){ // Her bruker vi så si alt det samme som fra oppgave 2.
$postnr = $_POST["postnr"];
$errors = array();
if(!$postnr){
  $errors["tomt"] = "Postnr feltet kan ikke være tomt";
}
if(strlen($postnr) != 4){
  $errors["antall"] = "Postnr skal bestå av 4 siffer";
}
if(!is_numeric($postnr)){
  $errors["siffer"] = "Postnr skal bestå av kun siffer";
}
if(count($errors) == 0){
  print("Gyldig postnr");
}else{
foreach ($errors as $feilmelding) {
  print("$feilmelding<br>");
}
}
}

 ?>
