<?php
$tall1=$_POST["tall1"];// Lager varibalen "$tall1" og gir den verdien lik det vi skrev i input felt med navn "tall1"
$tall2=$_POST["tall2"];// Lager varibalen "$tall2" og gir den verdien lik det vi skrev i input felt med navn "tall2"
print("Tall 1 er $tall1<br>");//Viser hva tall1 er
print("Tall 2 er $tall2<br><br>");//Viser hva tall2 er
if($tall1 < $tall2){ // Hvis tall1 er mindre enn tall2, utfør det i {}
  print("Tall 1 er mindre enn Tall 2");
} else if($tall1 == $tall2){ // Hvis tall1 er samme som tall2, print en melding om at tallene er like
  print("Tallene er like");
} else{ // Hvis tallene ikke er like og tall1 er ikke mindre enn tall2 så er det eneste mulige utfallet at tall1 er større enn tall2
  print("Tall 1 er større enn tall 2");
}
?>
