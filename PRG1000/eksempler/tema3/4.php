<?php
$sum=0;// Vi deklarerer variablen "$sum" som vi skal bruke til å holde på verdien mens vi adderer.
for($tall=1;$tall<=10;$tall++){ // Lister tallene 1 til 10

$sum = $tall + $sum;  // For hver gang koden er utført så får $sum verdien av $tall + seg selv.
}
print("Summen av tallene fra 1 til 10 er $sum");
?>
