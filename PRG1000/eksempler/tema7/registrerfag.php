  <?php $title = "Registrer fag"; ?>
  <?php include 'start.php';?>
  <article class="content">
  	<h2>Registrer fag</h2>
    <form action="" method="post">
      Fagkode:<input type="text" name="fagkode" required><br>
      Fagnavn:<input type="text" name="fagnavn" required><br>
      Faglærer:<input type="text" name="faglærer" required><br>
      <input type="submit" name="submit" value="Registrer"><input type="reset" name="reset" value="Nullstill">
    </form>
    <?php
      if(isset($_POST["submit"])){
        $fagkode = $_POST["fagkode"];
        $fagnavn = $_POST["fagnavn"];
        $faglærer = $_POST["faglærer"];
        $fagdata = $fagkode.";".$fagnavn.";".$faglærer."\n";
        $file = fopen("fag.txt","a+");
                fwrite($file, $fagdata);
                fclose($file);
        $explode = explode(";",$fagdata);
        print("<h3>Følgende er nå registrert<br></h3>"."Fagkode: ".$explode[0]."<br>"."Fagnavn: ".$explode[1]."<br>"."Faglærer: ".$explode[2]);
      }
     ?>

	</article>
  <?php include 'slutt.php';?>
