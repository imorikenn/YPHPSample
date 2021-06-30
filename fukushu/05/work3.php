<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>
<table border="2">
<?php

for($i=1; $i<31; $i++ ){
	if($i % 3 != 0){
	echo "<tr>\n";
	echo "<td>{$i}</td>\n";
	echo "<tr>\n";
	}
}
?>
</table>
</body>
</html>
