<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>
<table border="2">
<?php
for($i=1; $i<31; $i++){
	if($i % 4 == 0){
		echo "<tr>";
		echo "<td>{$i}</td>";
		echo"</tr>";
	}
}





