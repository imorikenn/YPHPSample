<?php require"SmartPhoneProduct.class.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>
<?php 
$smart_phone = array();
$smart_phone[] = new SmartPhoneProduct("iphone5","60000","Softbank","Apple");
$smart_phone[] = new SmartPhoneProduct("Experia Z Ultra","50000","DoCoMo","Sony");
$smart_phone[] = new SmartPhoneProduct("HTC J","35000","AU","HTC");
?>

<table border="1">
<tr><th>名前</th><th>金額</th><th>キャリア</th><th>メーカー</th></tr>
<?php
foreach($smart_phone as $sp){
?>
<tr>
	<td><?php echo $sp->getName(); ?></td>
	<td><?php echo $sp->getPrice(); ?></td>
	<td><?php echo $sp->getCarrier(); ?></td>
	<td><?php echo $sp->getMaker(); ?></td>
	
</tr>
<?php
}
?>
</table>
</body>
</html>