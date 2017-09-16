<html>
<head>
<title>Oppgave 5</title>
</head>
<body>

<form action="" method="post">
Navn:<input type="text" name="navn"><br>
Adresse:<input type="text" name="adresse"><br>
Postnr:<input type="text" name="postnr"><br>
Poststed:<input type="text" name="poststed"><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>

</body>
</html>
<?php
if(isset($_POST["submit"])){
$navn=$_POST["navn"];
$adresse=$_POST["adresse"];
$postnr=$_POST["postnr"];
$poststed=$_POST["poststed"];
$informasjon=$navn.",".$adresse.",".$postnr.",".$poststed."\n";

$tekstfil = fopen("adresse.txt", "a+"); // Åpne tekstfilen, "a+" (Read/Write. Preserves file content by writing to the end of the file)
fwrite($tekstfil, $informasjon); // Skriver variablen $student med linjeskift. ("\n")
fclose($tekstfil); // Lukk filen
print("Følgende informasjon er registrert: $navn, $adresse, $postnr, $poststed.");


}


 ?>
