<!DOCTYPE html>
<html>
<head>
<title>サンプル6</title>
</head>
<body>

<?php

$product = "鉛筆";
$price = 50;
$num = 10;

$total = buy($product, $price, $num);

echo "合計{$total}円です。<br/>\n";

function buy($pr, $pc, $nm)
{
	echo "<hr/>\n";

	echo  "商品「{$pr}」を{$pc}円で{$nm}個お買い上げいただきました。<br/>\n";

   $tt = $pc * $nm;

	echo "<hr/>\n";    
 
  return $tt;
}

?>

</body>
</html>