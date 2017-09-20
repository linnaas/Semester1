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
if(isset($_POST["submit"])){ // Sjekker at submit knapp er trykket
$klassekode = $_POST["klassekode"];
$errors = array();
if(!$klassekode){ // Hvis det ikke er skrevet noe i "klassekode" feltet
  $errors["tomt"] = "Klassekode feltet er tomt";
}
if(strlen($klassekode) != 3){  // Hvis lengden på $klassekode (stringlength) ikke er 3.
  $errors["antall"] = "Klassekoden består ikke av 3 tegn";
}                  // Her blir det litt komplisert .Bedre forklaring finner du på http://php.net/manual/en/function.substr.php og http://php.net/manual/en/function.ctype-upper.php
  //string substr ( string $string , int $start [, int $length ] )
if(!ctype_upper(substr($klassekode,0,2))){ // Her skal vi finne ut om 2 første tegn er store bokstaver. Det første vi gjør er å isolere 2 første tegnene av $klassekode. Da bruker vi "substr" med startposijon 0 og skal ta med 2 tegn fra plass 0.
  $errors["substr1"] = "Klassekodens 2 første tegn er ikke store bokstaver"; // Da vi har funnet 2 første tegnene så bruker vi "ctype_upper" for å sjekke om disse 2 er store bokstaver. Dersom de er store bokstaver så får vi verdien "true". Derfor bruker vi et utropstegn foran funksjonen for å reversere dette som i oppgave 2 og 3.
}
if(!is_numeric(substr($klassekode,-1))){ // Her skal vi finne det siste tegnet i $klassekode. Da bruker vi "substr" med verdi "-1" for å kun ta det siste tegnet. Deretter bruker vi "is_numeric" igjen for å sjekke om dette er et siffer.
  $errors["substr2"] = "Klassekodens siste tegn er ikke et tall";
}

if(count($errors) == 0){ // Samme funksjonen jeg brukte i tidligere eksempler.
  print("Gyldig");
} else {
  foreach ($errors as $feilmelding) {
    print("$feilmelding<br>");
  }
}
}

 ?>
