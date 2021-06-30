<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php
$kanto = array("東京","神奈川","埼玉","千葉","群馬","茨城","栃木");
$shikoku = array("香川","徳島","愛媛","高知");
$world = array_merge($kanto,$shikoku);

echo "<table border=\"2\">";
foreach($world as $i => $value){
	echo "<tr><td>{$i}</td><td>{$value}</td></tr>";
}



?>

</table>
</body>
</html>
