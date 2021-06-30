<?php 
	require_once("ListDisplay.class.php"); 
	require_once("TableDisplay.class.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>

<body>

<?php 
$data = array(
	"Yahoo" => "https://www.yahoo.co.jp/",
	"Rakuten" => "https://www.rakuten.co.jp/",
	"Google" => "https://www.google.co.jp/",
	"Amazon" => "https://www.amazon.co.jp/",
);
$list = new ListDisplay($data);
$list->show();
echo "<hr/>";
$table = new TableDisplay($data);
$table->show();
?>
</body>
</html>