<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php 

$hour=12;

if((1<= $hour) && ($hour <= 5)){ 
	echo "寝ています<br/>";
}else if((6<= $hour) && ($hour <= 9)){
	echo "おはようございます<br/>";
}else if((10<= $hour) && ($hour <= 18)){
	echo "こんにちは<br/>";
}else if((19<= $hour) && ($hour <= 22)){
	echo "お疲れさまでした<br/>";
}else if((23<= $hour) && ($hour <= 24)){
	echo "おやすみなさい<br/>";
}else{
	echo "その他です<br/>";
}





?>

</body>
</html>