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
if (isset($_POST["submit"])){ // "isset" funksjonen brukes for å sjekke om "submit" knappen er trykket.
  $svar=$_POST["tall"];
  for ($i=1; $i <= $svar; $i++) {
      print("$i<br>");
  }
}
?>
