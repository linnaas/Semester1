<html>
<head>
<title>Oppgave 6</title>
</head>
<body>
<h3>Oppgavenr skal være nøyaktig et tegn, dette tegnet skal være et siffer</h3>
<form action="" method="post">
<input type="text" name="oppgavenr"><br>
<input type="submit" name="submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
$oppgavenr = $_POST["oppgavenr"];
$errors = array();
if(!$oppgavenr){
  $errors["tomt"] = "oppgavenr feltet er tomt";
}
if(strlen($oppgavenr) != 1){
  $errors["antall"] = "oppgavenr er ikke 1 tegn";
}
if(!is_numeric(substr($oppgavenr,0,1))){
  $errors["siffer"] = "oppgavenr skal være et siffer";
}


if(count($errors) == 0){
  print("Gyldig");
} else {
  foreach ($errors as $feilmelding) {
    print("$feilmelding<br>");
  }
}
}

 ?>
