<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php
$employees=array(
	array("name" => "山田","seibetsu" => "m", "age" =>"33", "section"=> "営業"),
	array("name" => "佐藤","seibetsu" => "f", "age" =>"24", "section"=> "庶務"),
	array("name" => "高橋","seibetsu" => "m", "age" =>"21", "section"=> "営業"),
	array("name" => "前田","seibetsu" => "m", "age" =>"25", "section"=> "企画"),
	array("name" => "鈴木","seibetsu" => "f", "age" =>"23", "section"=> "営業"),
	array("name" => "上田","seibetsu" => "f", "age" =>"32", "section"=> "広報"),
	array("name" => "東野","seibetsu" => "m", "age" =>"32", "section"=> "庶務"),
	array("name" => "小山","seibetsu" => "f", "age" =>"29", "section"=> "営業"),
	array("name" => "坂本","seibetsu" => "f", "age" =>"24", "section"=> "企画"),
	array("name" => "阿部","seibetsu" => "f", "age" =>"29", "section"=> "営業"),
);

$men=array();
$women=array();


foreach($employees as $employee ){
	if(is_men($employee["seibetsu"])){
		$men[] = $employee;
	}else{
		$women[] = $employee;
	}
}
show_data($women);
show_data($men);

	

function is_men($ss){
	if($ss == "m"){
		return true;
	}else if($ss == "f"){
		return false;
	}
}
function show_data($x){
	echo "<table border=\"1\">";
	echo "<tr>";
	echo "<th>名前</th>"; 
	echo "<th>性別</th>";
	echo "<th>年齢</th>";
	echo "<th>部署</th>";
	echo "</tr>";
	
	foreach($x as $z){
		if($z["seibetsu"]=="m"){
			$z["seibetsu"]="男";
		}else if($z["seibetsu"]=="f"){
			$z["seibetsu"]="女";
		}
		echo "<tr><td>{$z["name"]}</td><td>{$z["seibetsu"]}</td><td>{$z["age"]}</td><td>{$z["section"]}</td></tr>";
	}
}
?>

</table>
</body>
</html>