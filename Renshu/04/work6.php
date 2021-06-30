<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php 

$a=0;

if(isset($a)){
	echo "isset($a) is true<br/>";
}else {
	echo "isset($a) is false<br/>";
}

if(empty($a)){
	echo "empty($a) is true<br/>";
}else {
	echo "empty($a) is false<br/>";
}

if(is_string($a)){
	echo "is_string($a) is true<br/>";
}else {
	echo "isset($a) is false<br/>";
}

if(is_numeric($a)){
	echo "is_numeric($a) is true<br/>";
}else {
	echo "is_numeric($a) is false<br/>";
}
?>

</body>
</html>