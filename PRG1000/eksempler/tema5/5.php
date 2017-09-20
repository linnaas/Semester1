<html>
<head>
<title>Oppgave 5</title>
</head>
<body>
<h3>Fagkode skal bestå av 7 tegn. 3 første tegn er store bokstaver og 4 siste tegn er siffre</h3>
<form action="" method="post">
<input type="text" name="fagkode"><br>
<input type="submit" name="submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){ // Alt her er forklart i oppgave 4.
$fagkode = $_POST["fagkode"];
$errors = array();
if(!$fagkode){
  $errors["tomt"] = "Fagkode feltet er tomt";
}
if(strlen($fagkode) != 7){
  $errors["antall"] = "Fagkoden består ikke av 7 tegn";
}
if(!ctype_upper(substr($fagkode,0,3))){
  $errors["substr1"] = "Fagkodens 3 første tegn er ikke store bokstaver";
}
if(!is_numeric(substr($fagkode,-4))){
  $errors["substr2"] = "Fagkodens siste 4 tegn er ikke tall";
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
