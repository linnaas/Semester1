<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Oppgave 8</title>
</head>
<body>
<form action="" method="post"><!-- Her trenger vim ikke å avgi en action siden .php koden er i samme fil -->
<p>Hva er 3 ganger 3?</p>
Svar: <input type="text" name="svar"><br><!-- Input felt med navn "svar" -->
<input type="submit" name="submit" value="Send"><!-- "Submit" knapp som sender informasjonen i formen til 3.php da man trykker på den "type=submit" er viktig-->
<input type="reset" name="reset" value="Nullstill"><!-- Reset knapp for å nullstille at som er innenfor <form> - taggen. "type=reset" er viktig -->


</form>
</body>
</html>

<?php
if (isset($_POST["submit"])){ // "isset" funksjonen brukes for å sjekke om "submit" knappen er trykket.
  $svar=$_POST["svar"];
  if(!$svar){
    print("Du har ikke avgitt et svar."); // Melding dersom svar feltet er tomt.
  }
  else if ($svar == 9){//Riktig svar
    print("Riktig svar! 3 ganger 3 er 9<br>");
  } else {
    print("Feil. 3 ganger 3 er ikke $svar. Riktig svar er 9<br>");
  }
}

?>
