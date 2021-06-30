<?php
require_once("MyDB.class.php");
$mydb = new MyDB();
$sql = "UPDATE employee SET class = 'シニアアシスタント' WHERE class = 'アシスタント'";
$data =array("シニアアシスタント");
$result = $mydb->executePrepareUpdate($sql,$data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ワーク4</title>
</head>
<body>
<?php
if($result){
	echo "更新に成功しました";
}else{
	echo "更新に失敗しました";
}
?>
</body>
</html>





