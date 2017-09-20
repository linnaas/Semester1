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
if(isset($_POST["submit"])){ // Sjekker at submit knapp er trykket
$fødselsnr = $_POST["fødselsnr"];
$errors = array(); // Lager et nytt array med navn $errors som vi bruker til å lagre alle feilmeldingene fra html skjemaet
if(!$fødselsnr){ // Hvis det ikke er skrevet noe i "fødselsnr" feltet
$errors["tom"] = "Fødselsnr feltet kan ikke være tomt"; // Legger til et element i arrayet med key "tom"
}
if(strlen($fødselsnr) != 9){ // Hvis lengden på fødselsnr (stringlength) ikke er 9.
$errors["antall"] = "Fødselsnummeret du prøvde består ikke av 9 tegn";// Legger til et element i arrayet med key "antall"
}
if (!is_numeric($fødselsnr)){ // "is_numeric" funksjonen gir oss verdien "true" dersom alt i variablen $fødelsnr er siffer. Vi setter et utropstegn "!" foran funksjonen for å reversere dette. Dvs dersom variablen ikke er kun siffer gi oss verdi "false" og gå vidre i programmet
$errors["tall"] = "Fødselsnummeret du prøvde var ikke kun tall"; // Legger til et element i arrayet med key "tall"
}
if(count($errors) == 0){ // "count" brukes for å telle hvor mange elementer det er i arrayet $errors. Dersom dette antallet er 0 så har vi ingen feilmeldinger dvs. fødselsnummeret er gyldig
  print("Fødelsnr '$fødselsnr' er gyldig");
} else { // Hvis det finnes elementer i arrayet så gjør dette:
  foreach ($errors as $feilmelding) { // Gå igjennom arrayet $errors og lagre alle verdiene som variabler med navn $feilmelding.
   print("$feilmelding<br>"); // Her printer vi ut verdien i $feilmelding like mange ganger som det er elementer i arrayet. $feilmelding endrer seg for hver gang funksjonen her er utført slik at vi enkelt kan liste alle feilmeldinger.
  }
}
}
 ?>
