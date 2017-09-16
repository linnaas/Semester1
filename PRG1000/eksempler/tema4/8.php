<html>
<head>
<title>Oppgave 8</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<h2>Vennligst skriv fullt eller delvis fornavn/etternavn/adresse/postnr/poststed.</h2>
<form action="" method="post">
<input type="text" name="navn" placeholder="navn/adresse/postnr/poststed"> <br>
<input type="submit" name="submit" value="Søk">
<input type="reset" name="reset" value="Nullstill">
</form>
<?php
if(isset($_POST["submit"])){
$søk = $_POST["navn"];
$informasjon = file('adresse.txt');
$informasjon = array_filter($informasjon);
foreach($informasjon AS $info){
    $final_array[] = explode(',', $info);
}
$antall = count($final_array);
?>
<table>
<tr>
  <td width="200px;">Navn</td>
  <td width="200px;">Adresse</td>
  <td width="200px;">Postnr</td>
  <td width="200px;">Poststed</td>
</tr>
<?php
for ($i = 0; $i < $antall; $i++){
  if(stripos($final_array[$i][0], $søk) !== false || stripos($final_array[$i][1], $søk) !== false || stripos($final_array[$i][2], $søk) !== false || stripos($final_array[$i][3], $søk) !== false){ // "stripos" funksjonen sjekker om noe fra  variablen "$søk" er likt det som er i array med index 0 "$final_array[$i][0]". DVS hvis søkeordet er delvis eller helt likt navnet så kommer det opp
      print("<tr><td>".$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</td><td>".$final_array[$i][3]."</td></tr>");
    }
  }
}
?>
<table>
</body>
</html>
