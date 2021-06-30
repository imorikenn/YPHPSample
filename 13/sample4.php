<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>
<table border="2">
<?php
$doc = new DOMDocument;
$doc->load("sample.rss");
$list = $doc->getElementsByTagName("item");

foreach($list as $node){
	echo "<tr>";
	echo "<td>". $node->nodeValue."</td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>
