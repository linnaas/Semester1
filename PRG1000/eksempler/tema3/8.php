<html>
<head>
<title>Oppgave 8</title>
</head>
<body>
  <form action="" method="post">
    Tall1:<input type="text" name="tall1"><br>
    Tall2:<input type="text" name="tall2"><br>
    Tall3:<input type="text" name="tall3"><br>
    Tall4:<input type="text" name="tall4"><br>
    Tall5:<input type="text" name="tall5"><br>
    <input type="submit" name="submit">
    <input type="reset" name="reset">
  </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
  $tall1=$_POST["tall1"];
  $tall2=$_POST["tall2"];
  $tall3=$_POST["tall3"];
  $tall4=$_POST["tall4"];
  $tall5=$_POST["tall5"];
  $array = array($tall1, $tall2, $tall3, $tall4, $tall5); //Sett alle variablene i et array som vi kaller $array
  $count=count($array);  // Funksjonen count viser hvor mange objekter det finnes i arrayet. Denne verdien lagrer vi i variablen "$count"
    for($i=0;$i<$count;$i++){ // Så lenge $i er mindre enn antall objekter i arrayet. Øk med 1 og kjør koden under
        print("$array[$i] ");
    }
    print("<br>");
    for($x=$count-1;$x>=0;$x--){ // $x = antall objekter i arrayet -1. Dette gjør vi for at vi skal bruke index 0,1,2,3,4 og ikke 1,2,3,4,5.
        print("$array[$x] "); // Printer arrayet baklengs
    }
  }

?>
