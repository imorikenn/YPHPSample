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


$a=0;
?>


<table border=\"2\">
<tr>
<th>名前</th> 
<th>性別</th>
<th>年齢</th> 
<th>部署</th>
</tr>



<?php
echo "営業部メンバー一覧<br/>\n";
foreach($employees as $employee ){
	echo "<tr>\n";
		if($employee["seibetsu"]=="m"){
			$employee["seibetsu"]="男";
		}else if($employee["seibetsu"]=="f"){
			$employee["seibetsu"]="女";
		}
		if($employee["section"]=="庶務"){
		continue;
		}
		else if($employee["section"]=="企画"){
		continue;
		}
		else if($employee["section"]=="広報"){
		continue;
		}
		echo	"<td>{$employee["name"]}</td>\n";
		echo	"<td>{$employee["seibetsu"]}</td>\n";
		echo	"<td>{$employee["age"]}</td>\n";
		echo	"<td>{$employee["section"]}</td>\n";
	echo "</tr>\n";
	$a += $employee["age"];
}
$a = $a / 5;
?>
</table>
<?php
	echo "営業部の平均年齢は".$a."です\n";
?>	

</body>
</html>