<!DOCTYPE html>
<html>
<head>
<title>サンプル3</title>
</head>
<body>

<?php 

$stock["みかん"] = 80;
$stock["いちご"] = 60;
$stock["りんご"] = 22;
$stock["もも"] = 50;
$stock["くり"] = 75;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>在庫状況</th>
<th>在庫状況</th>
</tr>

<?php

 foreach($stock as $name =>$value){
	echo "<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
	
}

?>

</table>

</body>
</html>