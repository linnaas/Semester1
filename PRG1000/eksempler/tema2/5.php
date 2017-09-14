<?php
$tall1=$_POST["tall1"];// Lager varibalen "$tall1" og gir den verdien lik det vi skrev i input felt med navn "tall1"
$tall2=$_POST["tall2"];// Lager varibalen "$tall2" og gir den verdien lik det vi skrev i input felt med navn "tall2"
$metode=$_POST["metode"];// Lager varibalen "$tall3" og gir den verdien lik det vi skrev i input felt med navn "tall3"
if(!$tall1 || !$tall2){ // Sjekker om tall1 og tall2  har fått en verdi
  print("Ikke alle feltene er utfyllt"); // Feilmelding dersom de ikke har en verdi
} else if ($metode == 1){ // Utfører følgende kode dersom metoden = 1
   $addisjon=$tall1+$tall2; //Regneoperasjon addisjon
  print("Tall 1 er $tall1<br>");
  print("Tall 2 er $tall2<br><br>");
  print("Regneoperasjonen er Addisjon.<br>");
  print("Resultatet av regneoperasjonen er $addisjon");
} else if ($metode == 2){ // Utfører følgende kode dersom metoden = 2
  $substraksjon=$tall1-$tall2;//Regneoperasjon substraksjon
  print("Tall 1 er $tall1<br>");
  print("Tall 2 er $tall2<br><br>");
  print("Regneoperasjonen er Substraksjon.<br>");
  print("Resultatet av regneoperasjonen er $substraksjon");
} else if ($metode == 3){ // Utfører følgende kode dersom metoden = 3
  $multiplikasjon=$tall1*$tall2;//Regneoperasjon multiplikasjon
  print("Tall 1 er $tall1<br>");
  print("Tall 2 er $tall2<br><br>");
  print("Regneoperasjonen er Multiplikasjon.<br>");
  print("Resultatet av regneoperasjonen er $multiplikasjon");
} else if ($metode == 4){ // Utfører følgende kode dersom metoden = 4
  $divisjon=$tall1/$tall2;//Regneoperasjon divisjon
  print("Tall 1 er $tall1<br>");
  print("Tall 2 er $tall2<br><br>");
  print("Regneoperasjonen er Divisjon.<br>");
  print("Resultatet av regneoperasjonen er $divisjon");
} else {
  print("Bruk et tall mellom 1 og 4 for å velge regneoperasjon"); // Feilmelding dersom metode er mindre enn 1 eller større enn 4
}
?>
