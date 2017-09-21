<?php $title = "Registrer oppgave"; ?>
  <?php include 'start.php';?>
  <article class="content">
  	<h2>Registrer oppgave</h2>
    <form action="" method="post">
      Fagkode:<input type="text" name="fagkode" required><br>
      Oppgavenr:<input type="text" name="oppgavenr" required><br>
      Frist:<input type="text" name="frist" required><br>
      <input type="submit" name="submit" value="Registrer"><input type="reset" name="reset" value="Nullstill">
    </form>
    <?php
      if(isset($_POST["submit"])){
        $fagkode = $_POST["fagkode"];
        $oppgavenr = $_POST["oppgavenr"];
        $frist = $_POST["frist"];
        $oppgavedata = $fagkode.";".$oppgavenr.";".$frist."\n";
        $file = fopen("oppgave.txt","a+");
                fwrite($file, $oppgavedata);
                fclose($file);
        $explode = explode(";",$oppgavedata);
        print("<h3>Følgende er nå registrert<br></h3>"."Fagkode: ".$explode[0]."<br>"."Oppgavenr: ".$explode[1]."<br>"."Frist: ".$explode[2]);
      }
     ?>

	</article>
  <?php include 'slutt.php';?>
