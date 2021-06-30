<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
</head>
<body>
<table border="2">
<tr bgcolor="AAAAAA">
<th>商品名</th><th>点数</th>
</tr>
<?php
$point = [80,60,22,50,75];

foreach($point as $key=> $value){
	echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
}
?>
</table>
</body>
</html>

