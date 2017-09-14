<?php
$svar=$_POST["svar"];// Lager varibalen "$svar" og gir den verdien lik det vi skrev i input felt med navn "svar"
if($svar == 9){ // "if" Funskjon som sjekker om svaret brukeren skrev inn er lik 9. Hvis svaret = 9 så utføres koden som er mellom "{}"
print("Riktig! 3 ganger 3 er 9.");// Denne koden utføres dersom påstanden i "if" funksjonen er riktig.
} else{ // "else" - Hvis ikke påstanden i "if" funksjonen utføres koden mellom disse {}
print("Feil! 3 ganger 3 er ikke $svar"); // Gir beskjed til brukeren at svaret er feil.
}
?>
