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

<table border=\"1\">
<tr>
<th>名前</th> 
<th>性別</th>
<th>年齢</th> 
<th>部署</th>
</tr>

<?php
foreach($employees as $employee ){
	showTr();
		foreach($employee as $key => $value){
			if($key=="seibetsu"){
				if($value=="m"){
					$value="男";
				}else{
					$value="女";
				}
			}
			showTd($value);
		}
		showTrEnd();
}

function showTr(){
	echo "<tr>";
}
function showTrEnd(){
	echo "</tr>";
}
function showTd($v){
	 echo "<td>$v</td>";
}

?>

</table>
</body>
</html>