<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>
<table border="2">
<?php

for($i=1; $i<41; $i++){
	if($i % 4==1){
	$j = $i + 1;
	$k = $i + 2;
	$l = $i + 3;
	echo "<tr>";
	echo "<td>{$i}</td>";
	echo "<td>{$j}</td>";
	echo "<td>{$k}</td>";
	echo "<td>{$l}</td>";
	echo "</tr>";
}
}

?>

</body>
</html>