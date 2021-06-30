<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php
$color1 = array(
	"blue" => "#0000ff",
	"red" => "#ff0000",
	"green" => "#00ff00",
	"fuchsia" => "#FF00FF",
);

$color2 = array(
	"aqua" => "#00FFFFf",
	"green" => "#00ff01",
	"aqua" => "#00FFFF",
	"palegreen" => "#98FB98",
);


$world=array_merge($color1,$color2);
echo "<table border=\"2\">\n";
foreach($world as $name => $value){
	echo "<tr><td style= \"background-color:{$value}\">{$name}</td><tr>";
}
?>
</table>
</body>
</html>