<?php require"Product.class.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>
<?php 
$product = new product();
$product->setName("鉛筆");
$product->setPrice(120);
?>
<table border="1">
<tr><th>名前</th><th>金額</th></tr>
<tr>
	<td><?php echo $product->getName(); ?></td>
	<td><?php echo $product->getPrice(); ?></td>
</tr>
</table>
</body>
</html>