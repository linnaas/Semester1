<?php $title = "Vis fag"; ?>
<?php include 'start.php';?>
<article class="content">
  <h2>Vis fag</h2>
  <?php

                  $data = file_get_contents('fag.txt'); // Gir variablen $data innholdet av "Student.txt" filen
                  $data = str_replace(array("\r"), '', $data);
                  $data = explode("\n", $data);
                  $data = array_filter($data);
                  $final_array = array();
                          $antall = 0; //antall studenter
                  foreach($data AS $row){
                      $final_array[] = explode(';', $row);
                  }?>
  <table border="1" style="border-collapse: collapse">
    <tbody>
      <tr>
        <td width="200px"><strong>Fagkode</strong></td>
        <td width="400px"><strong>Fagnavn</strong></td>
        <td width="400px"><strong>Faglærer</strong></td>
      </tr>
      <?php
          $length = count($final_array);
          for ($i = 0; $i < $length; $i++)
                {
                  print('<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</tr>"); // Print ut hver klassekode
                }?>
</tbody>
</table>
</article>
<?php include 'slutt.php';?>
