<?php
$sum=0;// Vi deklarerer variablen "$sum" som vi skal bruke til å holde på verdien mens vi adderer.
for($tall=1;$tall<=10;$tall++){ // Lister tallene 1 til 10
$sum = $tall + $sum;  // For hver gang koden er utført så får $sum verdien av $tall + seg selv.
}
$tall--; // $tall=$tall-1    .  Dette gjør vi for at $tall variablen skal bli riktig da vi skal bruke den i print funksjonen under. Hvis vi ikke gjør dette så vil den ha verdien 11 istedenfor 10.
$gjennomsnitt=$sum/$tall;// Vi deklarerer variablen "$sum" som vi skal bruke til å holde på verdien mens vi adderer.
print("Summen av tallene fra 1 til $tall er $sum<br>");
print("Gjennomsnittet av tallene fra 1 til $tall er $gjennomsnitt")
?>
