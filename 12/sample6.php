<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">

<?php
$fp = fopen("Sample.csv", "r");
while(($str = fgetcsv($fp)) != null){
	if(is_array($str)){
		echo "<tr>";
		foreach($str as $value){
			echo "<td>{$value}</td>";
		}
	}
	echo "</tr>\n";
}
fclose($fp);

?>
</table>
</body>
</html>