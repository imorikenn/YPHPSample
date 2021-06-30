<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
</head>
<body>
<table border="2">
<tr bgcolor="AAAAAA">
<th>番号</th><th>点数</th>
</tr>
<?php
$point = [80,60,22,50,75];
$a = 0;
foreach($point as $key=> $value){
	echo "<tr><td>{$key}</td><td>{$value}</td></tr>\n";
}
echo "</table>";
$a = array_sum($point);
$a = $a / count($point);
echo "平均点は" . $a . "です";
?>

</table>
</body>
</html>
