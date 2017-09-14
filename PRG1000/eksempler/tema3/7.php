<html>
<head>
<title>Oppgave 7</title>
</head>
<body>
  <form action="" method="post">
Fullt navn:<input type="text" name="navn">
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
  $navn=$_POST["navn"];
  $array = explode(" ",$navn); // Lag et array av variablen $navn, deles opp på " ".
  $antall = count($array); // Teller hvor mange elementer arrayet består av.
  if($antall>1){ // Print melingen dersom det er 2 eller flere elementer i arrayet. Dette gjør vi for å dobbeltsjekke at man faktisk skrev et etternavn.
    print("Fornavnet er: $array[0]<br>"); // Plass 0 i arrayet er fornavnet
    print("Etternavnet er: $array[1]");// Plass 1 i arrayet er etternavnet
    } else {                          // Dersom antall elementer i arrayet er mindre enn 2, skriv denne meldingen
      print("Fant ikke etternavnet");
    }
  }
?>
