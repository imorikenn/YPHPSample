<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php 

$weight=52.5;
$height=1.65;
$bmi=$weight/($height*$height);

if($bmi < 20){
	echo "やせすぎです<br/>";
}else if(($bmi >= 20) && ($bmi < 24)){ 
	echo "普通です<br/>";
}else if(($bmi >= 24) && ($bmi < 26)){ 
	echo "太りぎみです<br/>";
}else if($bmi >= 26) {
	echo "太りすぎです<br/>";
}


?>

</body>
</html>