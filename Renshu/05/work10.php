<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
</head>
<body>
<table border="1">
</td>

<?php
$a = 9;
while ($a > 0 ){
	$b = 9;
	echo "<tr>\n";	
	while ($b > 0 ){
		$ans=$a * $b;
		if(($ans % 2==0)) {
			echo "<td bgcolor=\"#ff0000\">{$ans}</td>\n";
		}
		else{
			echo "<td>{$ans}</td>\n";
		}
		$b--;
	}
	echo "</tr>\n";
	$a--;
}

?>

</body>
</html>