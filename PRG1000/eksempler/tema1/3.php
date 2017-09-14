<?php
$tall1=$_POST["tall1"];// Lager varibalen "$tall1" og gir den verdien lik det vi skrev i input felt med navn "tall1"
$tall2=$_POST["tall2"];// Lager varibalen "$tall2" og gir den verdien lik det vi skrev i input felt med navn "tall2"
$sum=$tall1+$tall2;// Lager variablen $sum som skal holde verdien av "tall1" og "tall2". Dette gjør vi enkelt med å bruke "+" for å finne summen.
$differanse=$tall1-$tall2; // Lager variablen $differanse som skal holde svaret av "tall1" - "tall2". Her bruker "-" for å finne svaret.
print("Tall 1 er $tall1<br>"); // Print funksjon for å vise brukeren hva som er brukt som tall1
print("Tall 2 er $tall2<br><br>");// Print funksjon for å vise brukeren hva som er brukt som tall2
print("Summen er $sum<br>");// Print funksjon for å vise brukeren hva som er summen av tall1 og tall2
print("Differansne er $differanse<br>"); //Print funskjon som viser brukeren differansen mellom tall1 og tall2
?>
