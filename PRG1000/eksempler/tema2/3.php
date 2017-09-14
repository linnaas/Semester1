<?php
$svar=$_POST["svar"];// Lager varibalen "$svar" og gir den verdien lik det vi skrev i input felt med navn "svar"
if(!$svar){ // Vi kan sette et utropstegn "!" foran er variablen i en "if" Funskjon for å sjekke om variablen har en verdi. Dersom den ikke har det utføres koden under i "{}"
print("Du har ikke avgitt et svar."); // Melding dersom svar feltet er tomt.
}
else if($svar == "j" || $svar == "ja"|| $svar == "J"|| $svar == "Ja"|| $svar == "JA"){ // "if" Funskjon som sjekker om svaret brukeren skrev inn er "ja" eller "j"
print("Du er student");// Denne koden utføres dersom påstanden i "if" funksjonen er riktig.
}
else if ($svar == "n" || $svar == "nei" || $svar == "N" || $svar == "Nei" || $svar == "NEI"){// "if" Funskjon som sjekker om svaret brukeren skrev inn er "nei eller "n"
print("Du er ikke student"); // Printer en melding om at man ikke er student dersom dette er svaret.
}
else { // "else" - Dersom ingen av påstandene ovenfor er sann utføres koden mellom disse {}
print("Du har ikke svar j/ja/n/nei på spørsmålet"); // Gir beskjed til brukeren at svaret er feil.
}
?>
