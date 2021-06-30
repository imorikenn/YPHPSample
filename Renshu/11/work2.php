<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>

<?php

$username = "root";
$password = "";
$database = "workbook";
$host = "localhost";
$dsn = "mysql:host={$host};dbname={$database};charset=utf8";
$db = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = "SELECT * FROM employee";
$data = $db->query($query);
?>

<table border="2">
<?php
$first = true;
$b = 1;
while($value = $data->fetch()){
	$keys = array_keys($value);
	if($first){
		echo "<tr bgcolor=\"#AAAAAA\">";
		echo "<th>番号</th>";
		foreach($keys as $key){
			echo "<th>{$key}</th>";
		}
		echo "</tr>";
		$first = false;
	}
	echo"<tr>";
	echo "<td>{$b}</td>";
	foreach($keys as $key){
		echo "<td>{$value[$key]}</td>";
	}
	echo "</tr>";
	$b++;
}
$db = null;
?>

</table>
</body>
</html>
