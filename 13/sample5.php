<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>
<form action="http://localhost/YPHPSample/13/sample5.php" method="post">
<input type="text" name="url"/>
<input type="submit" value="送信"/>
</form>
<?php
if(isset($_POST["url"])){
	$doc = simplexml_load_file($_POST["url"]);
	echo "<center>";
	echo "<h1>". $doc->channel->title ."</h1>";
	echo $doc->channel->description;
	echo "<hr/>";
	echo "</center>";
	foreach($doc->channel->item as $list){
		echo "<p>";
		echo "<h3>";
		echo "<a href=\"";
		echo $list->link;
		echo "\">";
		echo $list->title;
		echo "</a>";
		echo "</h3>";
		echo $list->description ."<br/>";
		echo $list->pubDate;
		echo "</p>";
	}
}
?>
</body>
</html>