<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product1 = array("pencil","eraser","ruler");
$product2 = array("pen","eraser","rubber");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名1</th>
<th>長さ</th>
<th>商品名2</th>
<th>長さ</th>
<th>一致</th>
</tr>

<?php

foreach($product1 as $value1){
 	foreach($product2 as $value2){
		echo "<tr><td>{$value1}</td><td>";
		echo  strlen($value1);
		echo "</td><td>{$value2}</td><td>";
		echo strlen($value2);
		echo "</td>";
		
	if(strcmp($value1, $value2) == 0){
		$mt="○";  
	}
	else{
		$mt="×";
	}
		print "<td>{$mt}</td></tr>\n";
	}
}

?>

</table>

</body>
</html>
