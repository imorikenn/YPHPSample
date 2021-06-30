<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>


<?php

$weight=52.5;
$height=1.65;

$bmi=$weight/($height*$height);

?>

<table border="1">
	<tr>
		<td>身長</td>
		<td>体重</td>
		<td>BMI指数</td>
	</tr>
	<tr>
		<td><?php echo $height; ?></td>
		<td><?php echo $weight; ?></td>
		<td><?php echo $bmi; ?></td>
	</tr>
</table>
		

</body>
</html