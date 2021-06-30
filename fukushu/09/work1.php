<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>

<?php

$urls = array(
	"https://www.yahoo.co.jp/", 
	"https://www.rakuten.co.jp/", 
	"https://www.amazon.co.jp/", 
	"https://www.google.co.jp/"
);

?>

<table border="1">
<tr><th>変換前</th><th>変換後</th></tr>
<?php

foreach($urls as $url){https://
	$url_after = substr($url,8);
	echo "<tr><td>{$url}</td>";
	echo "<td>{$url_after}</td></tr>";
}
?>
</table>
</body>
</html>