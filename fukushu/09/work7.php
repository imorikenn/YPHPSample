<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php
$zipcode = array("123-4567","1234567");
$pattern = "/[1-3]{3}-[4-7][4]|[1-7][7]/";

?>
<table border="2">
<tr><th>文字</th><th>マッチ</th></tr>
<?php
foreach($zipcode as $zip){
	echo "<tr><td>{$zip}</td>"; 
	if(preg_match($pattern,$zip)){
		echo "<td>○</td>";
	}else{
		echo "<td>×</td>";
	}
	echo "</tr>";
}

?>
</body>
</html>