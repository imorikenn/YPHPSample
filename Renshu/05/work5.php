<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>
<table border="2">
<?php

for($i=1; $i<=40; $i++){
	if($i % 4==1){
	$j=$i+1;
	$k=$i+2;
	$l=$i+3;
	echo "<tr>\n";
	echo "<td>{$i}</td>\n";
	echo "<td>{$j}</td>\n";
	echo "<td>{$k}</td>\n";
	echo "<td>{$l}</td>\n";
	echo"</tr>\n";
}
}



?>

</body>
</html>