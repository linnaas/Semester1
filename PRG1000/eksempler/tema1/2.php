<?php
$fornavn=$_POST["fornavn"];// Lager varibalen "$fornavn" og gir den verdien lik det vi skrev i input felt med navn "fornavn"
$etternavn=$_POST["etternavn"];// Lager varibalen "$etternavn" og gir den verdien lik det vi skrev i input felt med navn "etternavn"
$alder=$_POST["alder"];// Lager varibalen "$etternavn" og gir den verdien lik det vi skrev i input felt med navn "alder"
print("God dag $fornavn $etternavn, du er $alder år gammel.");// Funksjonen "print" skriver ut det som er inne i parantesen i form av HTML kode. Her kan vi bruke variablene vi lagde ovenfor for å vise informasjon til brukeren.
 ?>
