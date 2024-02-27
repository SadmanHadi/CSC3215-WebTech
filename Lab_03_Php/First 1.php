<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Basics</title>
</head>
<body>

	<h1>PHP Basics</h1>

	<?php 
		$cars = array(array('name' => 'Ford', 'country' => 'USA', 'year' => 1988),
				array('name' => 'Mercedes', 'country' => 'Germany', 'year' => 1978),
				array('name' => 'Toyota', 'country' => 'Japan', 'year' => 1958));
	?>

	<?php 
		echo "Car - unorderd list ";
		echo "<ul>";
		foreach($cars as $key => $value) {
			echo "<li>". $value['name'] . " - " . $value['country'] . " - " . $value['year'] ."</li>";
		}
		echo "</ul>";
	?>

	<hr>

	<?php 
		echo "Car - table";
		echo "<table>";
		foreach($cars as $key => $value) {
			echo "<tr>";
			echo "<th> Name </th>";
			echo "<th> Country </th>";
			echo "<th> Year </th>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>". $value['name'] ."</td>";
			echo "<td>". $value['country'] ."</td>";
			echo "<td>". $value['year'] ."</td>";
			echo "</tr>";
			
		}
		echo "</table>";




	?>

</body>
</html>