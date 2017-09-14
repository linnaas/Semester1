<html>
<head>
<title>Oppgave 6</title>
</head>
<body>
  <form action="" method="post">
Skriv ut tall fra 1 til:    <input type="text" name="tall">
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){ // "isset" funksjonen brukes for å sjekke om "submit" knappen er trykket. Kan også droppe denne koden og ha php koden i en egen fil som vi har brukt
  $svar=$_POST["tall"]; // Henter tallet brukeren har skrevet i tekstfeltet og lagrer det i variablen $svar
  for ($i=tall; $tall <= $svar; $tall++) { // Så lenge tallet som blir printet ut er mindre eller likt tallet i tekstfeltet så skrives det ut til brukeren og kjører koden på nytt.
      print("$tall<br>"); // Printer ut tallet til brukeren av nettsiden.
  }
}
?>

