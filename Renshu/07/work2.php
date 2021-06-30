<!DOCTYPE html>
<html>
<head>
<title>ワーク2</title>
</head>
<body>

<?php 
$data=array(100,24,36,26,47,16,100,20,29,47,66,89);

$result=getSumAndAverage($data);


echo "合計は". $result["total"] . "です</br>";
echo "平均は". $result["average"] . "です</br>";

function getSumAndAverage($x){
	return $result["total" => "(array_sum($x))
				   "average" => "(array_sum($x) / count($x))];
}
?>

</body>
</html>