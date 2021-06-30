<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php
$fm = array("hours", "minutes", "seconds", "year", "mon", "month", "mday", "wday", "weekday");
?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>指定</th>
<th>値</th>
</tr>

<?php
$dt = getdate();

foreach($fm as $id){
	echo "<tr><td>{$id}</td><td>";
	echo $dt[$id];
	echo "</td></tr>\n";    
}
?>

</table>
</body>
</html>
