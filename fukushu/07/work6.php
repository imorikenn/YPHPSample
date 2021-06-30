<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php 
$a=12;
$b=20;

echo "変換前<br/>";
echo "\$a=>".$a."<br/>" ;
echo "\$b=>".$b."<br/>" ;

swap();

echo "変換後<br/>";
echo "\$a=>".$a."<br/>" ;
echo "\$b=>".$b."<br/>" ;

function swap(){
	global $a;
	global $b;
	$a = 20;
	$b = 12;
}
?>
</body>
</html>