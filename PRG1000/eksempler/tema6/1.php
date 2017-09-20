<html>
<head>
<title>Oppgave 1</title>
</head>
<body>
<form action="" method="post">
Navn:<input type="text" name="navn" required><br>
Adresse:<input type="text" name="adresse" required><br>
Postnr:<input type="text" name="postnr" required><br>
Poststed:<input type="text" name="poststed" required><br>
Klassekode:<input type="text" name="klassekode" required><br>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
  $navn = $_POST["navn"];
  $adresse = $_POST["adresse"];
  $postnr = $_POST["postnr"];
  $poststed = $_POST["poststed"];
  $klassekode = $_POST["klassekode"];
  $studentdata = "$navn".";"."$adresse".";"."$postnr".";"."$poststed".";"."$klassekode"."\n";
  include "validering.php";
  validerPostNr($postnr);
  validerKlasseKode($klassekode);


  if(count($error) == 0){
    print("Følgende informasjon er skrevet til dokumentet: $studentdata");
     $file = fopen("studentdata.txt", "a+");
             fwrite($file, $studentdata);
             fclose($file);
  } else {
            foreach ($error as $feilmelding) {
            print("$feilmelding<br>");
            }
}
}
 ?>
