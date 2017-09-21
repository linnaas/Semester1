<?php $title = "Vis oppgave"; ?>
<?php include 'start.php';?>
<article class="content">
  <h2>Vis oppgaver</h2>
  <?php
    $data = file_get_contents('oppgave.txt'); // Gir variablen $data innholdet av "Student.txt" filen
    $data = explode("\n", $data);
    $data = array_filter($data);
    $final_array = array();
    foreach($data AS $verdi){
        $final_array[] = explode(';', $verdi);
    }?>
  <table border="1" style="border-collapse: collapse">
    <tbody>
      <tr>
        <td width="200px"><strong>Fagkode</strong></td>
        <td width="400px"><strong>Oppgavenr</strong></td>
        <td width="400px"><strong>frist</strong></td>
      </tr>
      <?php
          $length = count($final_array);
          for ($i = 0; $i < $length; $i++)
                {
                  print('<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</tr>");
                }?>
</tbody>
</table>
</article>
<?php include 'slutt.php';?>
