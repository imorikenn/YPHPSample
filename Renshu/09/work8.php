<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php

$files = array("sales.xls","note.txt","document.pdf","index.html");


$pattern = "/\.[a-z]+/";
?>

<table border="2">
<tr><th>文字</th><th>マッチ</th></tr>
<?php
foreach($files as $file){
	echo "<tr><td>{$file}</td>"; 
	if(preg_match($pattern,$file,$matched)){
		echo "<td>{$matched[0]}</td>";
	}else{
		echo "<td></td>";
	}
	echo "</tr>";
}

?>
</body>
</html>