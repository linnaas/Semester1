<html>
<head>
<title>Oppgave 2</title>
</head>
<body>
<form action="" method="post">
Fagkode:<input type="text" name="fagkode" required><br>
Oppgavenr:<input type="text" name="oppgavenr" required><br>
Frist:<input type="text" name="frist" required><br>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
  $fagkode = $_POST["fagkode"];
  $oppgavenr = $_POST["oppgavenr"];
  $frist = $_POST["frist"];
  $oppgavedata = "$fagkode".";"."$oppgavenr".";"."$frist"."\n";
  include "validering.php";
  validerFagKode($fagkode);
  validerOppgavenr($oppgavenr);


  if(count($error) == 0){
    print("Følgende informasjon er skrevet til dokumentet: $oppgavedata");
     $file = fopen("oppgave.txt", "a+");
             fwrite($file, $oppgavedata);
             fclose($file);
  } else {
            foreach ($error as $feilmelding) {
            print("$feilmelding<br>");
            }
}
}
 ?>
