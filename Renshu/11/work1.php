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
while($value = $data->fetch()){
	$keys = array_keys($value);
	if($first){
		echo "<tr bgcolor=\"#AAAAAA\">";
		foreach($keys as $key){
			echo "<th>{$key}</th>";
		}
		echo "</tr>";
		$first = false;
	}
	echo"<tr>";
	foreach($keys as $key){
		echo "<td>{$value[$key]}</td>";
	
	}
	echo "</tr>";
}
$db = null;
?>

</table>
</body>
</html>
