<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Vis klasseliste</title>
</head>
<body>
		<h1>Vis klasseliste</h1>
		<form action="" method="post">
			<?php
				$data = file_get_contents('klasse.txt'); // Gir variablen $data innholdet av "Student.txt" filen
				$data = str_replace(array("\r"), '', $data);
				$data = explode("\n", $data);
				$data = array_filter($data);
				$final_array = array();
				foreach($data AS $row){
					$final_array[] = explode(';', $row);
				}
				$length = count($final_array);?>
				<select name='klasseliste'>
					<?php
						for ($i = 0; $i < $length; $i++){
							print( "<option value=".$final_array[$i][0].">".$final_array[$i][0]."</option>");
						}
					?>
			</select>
			<br>
			<input name="submit" type="submit" value="Vis">
			<input name="reset" type="reset" value="Nullstill">
		</form>
</body>
<?php
if(isset($_POST["submit"])){
 $klasseliste = $_POST["klasseliste"];?>
<h3>Alle studenter i klasse <?php print("$klasseliste"); ?></h3>
<?php
	$data = file_get_contents('student.txt'); // Gir variablen $data innholdet av "Student.txt" filen
	$data = str_replace(array("\r"), '', $data);
	$data = explode("\n", $data);
	$data = array_filter($data);
	$final_array = array();
	foreach($data AS $row){
		$final_array[] = explode(';', $row);
	}
	?>
	<table border="1" style="border-collapse: collapse">
		<tbody>
			<tr>
				<td width="200px"><strong>Brukernavn</strong></td>
				<td width="200px"><strong>Fornavn</strong></td>
				<td width="200px"><strong>Etternavn</strong></td>
				<td width="200px"><strong>Klassekode</strong></td>
			</tr>
<?php
	$length = count($final_array);
	$antall = 0;
	for ($i = 0; $i < $length; $i++){
		if($klasseliste == $final_array[$i][3]){
			$antall ++;
			echo '<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td><td>".$final_array[$i][2]."</td><td>".$final_array[$i][3]."</td></tr>"; // Print ut hver student med riktig klassekode
		}
	}
}
?>
	</tbody>
	</table>


</html>
