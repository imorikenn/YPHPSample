<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
</head>
<body>

<?php
$employees=array();

$name="山田";
$age="23";
$seibetsu="f";
$section="広報";
$employees[] = compact("name","age","seibetsu","section") ;


$name="佐藤";
$age="28";
$seibetsu="f";
$section="開発";
$employees[]=compact("name","age","seibetsu","section");
?>

<table border="1">
<tr><th>名前</th><th>年齢</th><th>性別</th><th>部署</th></tr>

<?php
foreach($employees as $employee){
	extract($employee);
	$seibetsu = ($seibetsu == "m") ? "男" : "女";
	echo
	"<tr><td>{$name}</td><td>{$age}</td><td>{$seibetsu}</td><td>{$section}</td></tr>";
}
?>
</table>
</body>
</html>