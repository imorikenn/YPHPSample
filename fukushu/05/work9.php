<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
</head>
<body>
<table border="1">
<?php
$a = 9;
while(0<$a){
	echo "<tr>\n"; //二つ目のwhile文をくくっている。
	$b = 9;
	while(0<$b){
		$ans=$a * $b; 
		echo "<td>{$ans}</td>\n";
		$b--;
	}
	echo "</tr>\n";
	$a--;
}




