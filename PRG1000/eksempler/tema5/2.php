<html>
<head>
<title>Oppgave 2</title>
</head>
<body>
<h3>Fødsesnr skal bestå av nøyaktig 9 tall</h3>
<form action="" method="post">
<input type="text" name="fødselsnr"><br>
<input type="submit" name="submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
$fødselsnr = $_POST["fødselsnr"];
$errors = array();
if(!$fødselsnr){
$errors["tom"] = "Fødselsnr feltet kan ikke være tomt";
}
if(strlen($fødselsnr) != 9){
$errors["antall"] = "Fødselsnummeret du prøvde består ikke av 9 tegn";
}
if (!is_numeric($fødselsnr)){
$errors["tall"] = "Fødselsnummeret du prøvde var ikke kun tall";
}
if(count($errors) == 0){
  print("Fødelsnr '$fødselsnr' er gyldig");
} else {
  foreach ($errors as $value) {
   print("$value<br>");
  }
}
}
 ?>
