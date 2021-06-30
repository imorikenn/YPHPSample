<!DOCTYPE html>
<html>
<head>
<title>ワーク8</title>
</head>
<body>

<?php
$items = [
	["name" => "オレンジ", "price" =>120, "unit" => 4 ],
	["name" => "メロン", "price" =>530, "unit" => 1 ],
	["name" => "りんご", "price" =>190, "unit" => 5 ],
	["name" => "スイカ", "price" =>520, "unit" => 2 ],
];
	
$total = 0;
?>
<table border="1">
<tr><th>品目</th><th>金額</th><th>単価</th><th>小計</th></tr>
<?php
	foreach($items as $item){
	extract($item);
	$sub_total = sub_total($item);
	$total += $sub_total;
	echo "<tr>";
	echo "<td>{$name}</td>";
	echo "<td>{$price}</td>";
	echo "<td>{$unit}</td>";
	echo "<td>{$sub_total}</td>";
	echo "</tr>";
}

function sub_total($x){
	$tt = $x["price"]*$x["unit"];
	return $tt;
}

?>
</table>
合計金額は<?php echo $total; ?>円です
</body>
</html>