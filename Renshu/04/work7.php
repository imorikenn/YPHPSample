<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php 

$grade=3;

switch($grade){
	case 1:
	echo "もっと頑張りましょう<br/>";
	break;
	
	case 2:
	case 3:
	echo "あと少しです<br/>";
	break;
	
	case 4:
	echo "よくできました<br/>";
	break;
	
	case 5:
	echo "大変よくできました<br/>";
	break;
}
	
	

?>

</body>
</html>