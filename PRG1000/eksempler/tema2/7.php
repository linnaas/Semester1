<?php
$tall1=$_POST["tall1"];// Lager varibalen "$tall1" og gir den verdien lik det vi skrev i input felt med navn "tall1"
$tall2=$_POST["tall2"];// Lager varibalen "$tall2" og gir den verdien lik det vi skrev i input felt med navn "tall2"
$tall3=$_POST["tall3"];// Lager varibalen "$tall3" og gir den verdien lik det vi skrev i input felt med navn "tall3"

print("Tall 1 er $tall1<br>");//Viser hva tall1 er
print("Tall 2 er $tall2<br>");//Viser hva tall1 er
print("Tall 3 er $tall3<br><br>");//Viser hva tall2 er
if($tall1 < $tall2){ // Hvis tall1 er mindre enn tall2, utfør det i {}
  print("Tall 1 er mindre enn Tall 2<br>");
} else if($tall1 == $tall2){ // Hvis tall1 er samme som tall2, print en melding om at tallene er like
  print("Tallene $tall1 og $tall2 er like<br>");
} else{ // Hvis tallene ikke er like og tall1 er ikke mindre enn tall2 så er det eneste mulige utfallet at tall1 er større enn tall2
  print("Tall 1 er større enn tall 2<br>");
}
if($tall1 < $tall3){
  print("Tall 1 er mindre enn Tall 3<br>");
} else if($tall1 == $tall3){
  print("Tallene $tall1 og $tall3 er like<br>");
} else{
  print("Tall 1 er større enn tall 3<br>");
}
if($tall3 < $tall2){
  print("Tall 3 er mindre enn Tall 2<br>");
} else if($tall3 == $tall2){
  print("Tallene $tall3 og $tall2 er like<br>");
} else{
  print("Tall 3 er større enn tall 2<br>");
}
?>
