<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php 
$fp = fopen("data.txt", "r");
while(($num = fgets($fp)) != null){
	for($i=0; $i<$num; $i++){
		echo "<img src=\"g.jpg\"/>";
	}
	echo "\t{$num}<br/>\n";
	echo "<br/>\n";
}
fclose($fp);
?>

</body>
</html>