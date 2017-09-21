<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Vis alle klasser</title>
</head>
<body>
		<h1>Alle klasser</h1>
		<?php
			$data = file_get_contents('klasse.txt'); // Gir variablen $data innholdet av "Student.txt" filen
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
					<td width="200px"><strong>Klassekode</strong></td>
					<td width="400px"><strong>Klassenavn</strong></td>
				</tr>
				<?php
					$length = count($final_array);
					for ($i = 0; $i < $length; $i++){
						echo '<tr><td>'.$final_array[$i][0]."</td><td>".$final_array[$i][1]."</td></tr>"; // Print ut hver klassekode
					}
				?>
			</tbody>
		</table>
</div>
</body>
</html>
