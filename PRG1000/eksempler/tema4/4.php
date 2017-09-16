<html>
<head>
<title>Oppgave 4</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="navn" placeholder="Fornavn eller etternavn"> <br>
<input type="submit" name="submit" value="Søk">
<input type="reset" name="reset" value="Nullstill">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$søk = $_POST["navn"];
$fulltnavn = file('navn.txt'); // Les hver linje fra "navn.txt" Funksjonen "file" lager et array hvor hver linje er en del av arrayet. Navn1 = $fulltnavn[0]. Navn2 = $fulltnavn[1] osv...
$fulltnavn = array_filter($fulltnavn); // Array_filter fjerner blanke linjer før og etter navn i dokumentet slik at de ikke blir en del av array, dette gjøres for å forsikre oss at vi ikke skal få en feilmelding for å prøve å "print()" et tomt array.
foreach($fulltnavn AS $navn){
    $final_array[] = explode(' ', $navn); // Fyll inn "$final_array" med navnene fra array "$navn", deles opp på " " mellom navnene. Da får vi et array som fungerer slik:  $navn[0][0]=Fornavn 1, navn[0][1]=Etternavn 1, $navn[1][0]=Fornavn 2, navn[1][1]=Etternavn 2
}
$antall = count($fulltnavn);
for ($i = 0; $i < $antall; $i++){
  if(strcasecmp($søk, $final_array[$i][0]) == 0 || strcasecmp($søk, $final_array[$i][1]) == 0){ // "strcasecmp();" funksjonen brukes for å sammenligne 2 variabler uten å ta hensyn til store bokstaver. http://php.net/strcasecmp "Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal."
      print($final_array[$i][0]." ".$final_array[$i][1]."<br>"); // Print alle fornavn og etternavn som matcher sammenligningen i "if" setningen over
    }
  }

}
// Kan også skrive "for" funksjonen lik linje 30, men da kommer ikke navnet opp hvis man søker uten store bokstaver.
// if($søk == $final_array[$i][0]) || ($søk == $final_array[$i][1])){


 ?>
