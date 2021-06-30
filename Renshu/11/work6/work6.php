<?php
require_once("MyDB.class.php");
$mydb = new MyDB();
$category_name = "";
if(isset($_POST["category_name"])){
	$category_name = $_POST["category_name"];
	$data = array($category_name);
	$sql = "SELECT * FROM books as b inner join category as c On b.category_id = c.category_id  WHERE category_name = ?";
}else{
	$data = array();
	$sql = "SELECT * FROM books as b inner join category as c On b.category_id = c.category_id";
}
$result = $mydb->executePrepareQuery($sql,$data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ワーク6</title>
</head>
<body>
<form method="POST" action="work6.php">
	<label for="category_name">カテゴリー名</label>
	<input type="text" id="category_name" name="category_name" value="<?php echo htmlspecialchars($category_name,ENT_QUOTES,"UTF-8"); ?>" />
	<input type="submit" value="送信" />
</form>
<hr/>
<?php
if($result && $result->rowCount()>0){
?>
	<table border="2">
	<?php
	$first = true;
	while($value = $result->fetch()){
		$keys = array_keys($value);
		if($first){
			echo "<tr bgcolor=\"#AAAAAA\">";
			foreach($keys as $key){
				echo "<th>{$key}</th>";
			}
			echo "</tr>";
			$first = false;
		}
		echo "<tr>";
		foreach($keys as $key){
			echo "<td>{$value[$key]}</td>";
		}
		echo "</tr>";
	}
	?>
	</table>
<?php
}else{
	echo "<div>データはありません</div>";
}
?>
</body>
</html>















