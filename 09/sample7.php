<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>
<?php
$ptr = array("[012]", "[0-3]", "[^012]");
$str = array("0", "1", "2", "3");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>パターン</th>
<th>文字列</th>
<th>マッチ</th>
</tr>

<?php

foreach($ptr as $valueptr){
	foreach($str as $valuestr){

		echo "<tr><td>{$valueptr}</td><td>{$valuestr}</td>";

		$mt = preg_match("/". $valueptr . "/", $valuestr) ? "○": "×";

		echo "<td>{$mt}</td></tr>\n";
	}
}

?>

</table>

</body>
</html>