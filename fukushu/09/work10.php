<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
</head>
<body>

<?php
$a_tags = array(
	"<a href=\"https://www.yahoo.co.jp/\">Yahoo</a>", 
	"<a href=\"https://www.rakuten.co.jp/\">Rakuten</a>", 
	"<a href=\"https://www.amazon.co.jp/\">Amazon</a>", 
	"<a href=\"https://www.google.co.jp/\">Google</a>",
);
$pattern = "/"/\"([^\"]*)\"//";

?>

<table border="2">
<tr><th>文字</th><th>リンクテキスト</th></tr>
<?php
foreach($a_tags as $a_tag){
	$a_tag_after = htmlspecialchars($a_tag,ENT_QUOTES,"UTF-8");
	echo "<tr><td>{$a_tag_after}</td>"; 
	$a_tag = preg_replace($pattern,"",$a_tag);
	echo "<td>{$a_tag}</td></tr>";
}
?>
</body>
</html>

