<?php
$gift=$_POST["gift"];// Lager varibalen "$gift" og gir den verdien lik det vi skrev i input felt med navn "gift"
$barn=$_POST["barn"];// Lager varibalen "$barn" og gir den verdien lik det vi skrev i input felt med navn "barn"

if(!$barn || !$gift){ // Vi kan sette et utropstegn "!" foran er variablen i en "if" Funskjon for å sjekke om variablen har en verdi. Dersom den ikke har det utføres koden under i "{}"
print("Minst et av input feltene er tomme."); // Melding dersom et felt er tomt.
}
else if($gift == "j" && $barn == "j"){ // "if" Funskjon som sjekker om svaret brukeren skrev inn er "n eller j"
print("Du er gift og har barn");// Denne koden utføres dersom påstanden i "if" funksjonen er riktig.
}
else if ($gift == "j" && $barn == "n"){// "if" Funskjon som sjekker om svaret brukeren skrev inn er "n eller j"
print("Du er gift og har ikke barn"); // Printer en melding om at man ikke er student dersom dette er svaret.
}
else if ($gift == "n" && $barn == "j"){// "if" Funskjon som sjekker om svaret brukeren skrev inn er "n eller j"
print("Du er ikke gift og har barn"); // Printer en melding om at man ikke er student dersom dette er svaret.
}
else if ($gift == "n" && $barn == "n"){// "if" Funskjon som sjekker om svaret brukeren skrev inn er "n eller j"
print("Du er ikke gift og har ikke barn"); // Printer en melding om at man ikke er student dersom dette er svaret.
}
else { // "else" - Dersom ingen av påstandene ovenfor er sann utføres koden mellom disse {}
print("Du har ikke svar j eller n på spørsmålene"); // Gir beskjed til brukeren at svaret er feil.
}
?>
