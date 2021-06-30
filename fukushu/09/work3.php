<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php

$a_tags = array(
	"<a href=\"https://www.yahoo.co.jp/\">Yahoo</a>", 
	"<a href=\"https://www.rakuten.co.jp/\">Rakuten</a>", 
	"<a href=\"https://www.amazon.co.jp/\">Amazon</a>", 
	"<a href=\"https://www.google.co.jp/\">Google</a>",
);

?>

<table border="1">
<tr><th>変換前</th><th>変換後</th></tr>
<?php

foreach($a_tags as $a_tag){
	$a_tag_after = strip_tags($a_tag);
	echo "<tr><td>{$a_tag}</td>";
	echo "<td>{$a_tag_after}</td></tr>";
}
?>
</table>
</body>
</html>