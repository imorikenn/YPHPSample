<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$test = array(80, 60, 22, 50, 75);

$a = 0;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>点数</th>
</tr>

<?php

foreach ($test as $id => $value){
$a += $test[$id];
	echo "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

$a=$a / 5;

?>

</table>

<?php


print "<br/>合計点数は{$a}です。<br/>\n";


?>

</body>
</html>