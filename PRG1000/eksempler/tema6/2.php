<html>
<head>
<title>Oppgave 2</title>
</head>
<body>
<form action="" method="post">
Fagkode:<input type="text" name="fagkode" required><br>
Fagnavn:<input type="text" name="fagnavn" required><br>
Faglærer:<input type="text" name="faglærer" required><br>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
  $fagkode = $_POST["fagkode"];
  $fagnavn = $_POST["fagnavn"];
  $faglærer = $_POST["faglærer"];
  $fagdata = "$fagkode".";"."$fagnavn".";"."$faglærer"."\n";
  include "validering.php";
  validerFagKode($fagkode);


  if(count($error) == 0){
    print("Følgende informasjon er skrevet til dokumentet: $fagdata");
     $file = fopen("fag.txt", "a+");
             fwrite($file, $fagdata);
             fclose($file);
  } else {
            foreach ($error as $feilmelding) {
            print("$feilmelding<br>");
            }
}
}
 ?>
