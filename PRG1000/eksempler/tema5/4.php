<html>
<head>
<title>Oppgave 4</title>
</head>
<body>
<h3>Klassekode skal bestå av 3 tegn. 2 første tegn er store bokstaver og siste tegn er et siffer</h3>
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
$errors = array();
if(!$klassekode){
  $errors["tomt"] = "Klassekode feltet er tomt";
}
if(strlen($klassekode) != 3){
  $errors["antall"] = "Klassekoden består ikke av 3 tegn";
}
if(!ctype_upper(substr($klassekode,0,2))){
  $errors["substr1"] = "Klassekodens 2 første tegn er ikke store bokstaver";
}
if(!is_numeric(substr($klassekode,-1))){
  $errors["substr2"] = "Klassekodens siste tegn er ikke et tall";
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
