<!-- Koden her er så si det samme som i oppgave 2 med unntak av at vi printer array index 1 før array index 0 -->
<html>
<head>
<title>Oppgave 3</title>
</head>
<body>
<h1>Følgende navn er registrert</h1>
</body>
</html>
<?php

$fulltnavn = file('navn.txt'); // Les hver linje fra "navn.txt" Funksjonen "file" lager et array hvor hver linje er en del av arrayet. Navn1 = $fulltnavn[0]. Navn2 = $fulltnavn[1] osv...
$fulltnavn = array_filter($fulltnavn); // Array_filter fjerner blanke linjer før og etter navn i dokumentet slik at de ikke blir en del av array, dette gjøres for å forsikre oss at vi ikke skal få en feilmelding for å prøve å "print()" et tomt array.
foreach($fulltnavn AS $navn){
    $final_array[] = explode(' ', $navn); // Fyll inn "$final_array" med navnene fra array "$navn", deles opp på " " mellom navnene. Da får vi et array som fungerer slik:  $navn[0][0]=Fornavn 1, navn[0][1]=Etternavn 1, $navn[1][0]=Fornavn 2, navn[1][1]=Etternavn 2
}
$antall = count($fulltnavn); // Lagre antallet navn som en variablel; $antall. Vi trenger denne informasjonen for å vite hvor mange ganger vi skal kjøre "for" Funksjonen under.
for ($i = 0; $i < $antall; $i++){ // "$i" brukes kun som en "index" for å telle, ignorer det navnet. Kjør denne koden like mange ganger som det er navn i array "$fulltnavn"
  print($final_array[$i][1]." ".$final_array[$i][0]."<br>");  // Her bruker vi $final_array[$i][1] først istedetfor $final_array[$i][0] som i oppgave 2.
}                                                             //
                                                              // - Print første etternavn og første fornavn
                                                              // - Print andre etternavn og andre fornavn
 ?>
