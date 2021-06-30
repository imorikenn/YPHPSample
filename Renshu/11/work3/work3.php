<?php
require_once("MyDB.class.php");
$mydb = new MyDB();
$sql = "SELECT l_name, f_name, email FROM usr WHERE prefecture in ('東京都', '神奈川県')";
$data = $mydb->executeQuery($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>
<table border="2">
<?php
$first = true;
while($value = $data->fetch()){
	$keys = array_keys($value);
	if($first){
		echo "<tr bgcolor=\"#AAAAAA\">";
		foreach($keys as $key){
			echo "<th>${key}</th>";
		}
		echo "</tr>";
		$first = false;
	}
	echo "<tr>";
	foreach($keys as $key){
		echo "<td>{$value[$key]}</td>";
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>








