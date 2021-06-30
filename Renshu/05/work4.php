<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>
<table border="2">
<?php

for($i=1; $i<=28; $i++){
	if($i % 4==0){
	echo "<tr>\n";
	echo "<td>{$i}</td>\n";
	echo"</tr>\n";
}
}

?>

</body>
</html>