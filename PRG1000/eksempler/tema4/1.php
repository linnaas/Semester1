<html>
<head>
<title>Oppgave 1</title>
</head>
<body>

<form action="" method="post">
Fornavn:<input type="text" name="fornavn"><br>
Etternavn:<input type="text" name="etternavn"><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>

</body>
</html>
<?php
if(isset($_POST["submit"])){
$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$navn=$fornavn." ".$etternavn. "\n";

$handle = fopen("navn.txt", "a+"); // Åpne tekstfilen, "a+" (Read/Write. Preserves file content by writing to the end of the file)
fwrite($handle, $navn); // Skriver variablen $student på ny linje
fclose($handle); // Lukk filen

$readin = file("navn.txt");
foreach ($readin as $fname) {
  echo $fname.",";
}

}


 ?>
