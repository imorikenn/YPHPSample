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

function getSumAndAverage($a){
	return ["total" => (array_sum($a)),
		   "average" => (array_sum($a)/count($a))];
}

?>

</body>
</html>