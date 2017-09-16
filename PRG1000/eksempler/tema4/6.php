<html>
<head>
<title>Oppgave 6</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<h1>Følgende informasjon er registrert</h1>
<?php
$informasjon = file('adresse.txt');
$informasjon = array_filter($informasjon);
foreach($informasjon AS $info){
    $final_array[] = explode(',', $info);
}
$antall = count($informasjon);
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
  print("<tr><td>".$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</td><td>".$final_array[$i][3]."</td></tr>");
}

 ?>
<table>
</body>
</html>
