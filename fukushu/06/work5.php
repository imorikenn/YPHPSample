<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php
$employees=array(
	array("name"=>"山田","seibetsu" => "m", "age" =>"33", "section"=> "営業"),
	array("name"=>"佐藤","seibetsu" => "f", "age" =>"24", "section"=> "庶務"),
	array("name"=>"高橋","seibetsu" => "m", "age" =>"21", "section"=> "営業"),
	array("name"=>"前田","seibetsu" => "m", "age" =>"25", "section"=> "企画"),
	array("name"=>"鈴木","seibetsu" => "f", "age" =>"23", "section"=> "営業"),
	array("name"=>"上田","seibetsu" => "f", "age" =>"32", "section"=> "広報"),
	array("name"=>"東野","seibetsu" => "m", "age" =>"32", "section"=> "庶務"),
	array("name"=>"小山","seibetsu" => "f", "age" =>"29", "section"=> "営業"),
	array("name"=>"坂本","seibetsu" => "f", "age" =>"24", "section"=> "企画"),
	array("name"=>"阿部","seibetsu" => "f", "age" =>"29", "section"=> "営業"),
);
?>



<?php
$m=0;
$f=0;

foreach($employees as $employee ){
		if($employee["seibetsu"]=="m"){
			 $m +=$employee["age"];
		}else if($employee["seibetsu"]=="f"){
			 $f +=$employee["age"];
		}
}
$m=$m / 4;
$f=$f / 6;
echo "男性社員の平均年齢は{$m}才です。</br>\n";
echo "女性社員の平均年齢は{$f}才です。\n";
?>

</body>
</html>