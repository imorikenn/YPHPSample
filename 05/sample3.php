<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
	<th>イメージ</th>
	<th>商品名</th>
	</tr>






<?php


for($i=0; $i<5; $i++){
	echo "<tr>\n";
	echo "<td><img src=\"{$i}.jpg\"?></td><td>商品{$i}
		</td>\n";
	echo"</tr>\n";
}

echo "<hr/>\n";
echo "商品は以上です。<br/>\n";

?>

</body>
</html>