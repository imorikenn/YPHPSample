<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php
$prefectures=array(
	"東京",
	"神奈川",
	"埼玉",
	"群馬",
	"千葉",
	"茨城",
	"栃木"
);
?>

<table border=\"2\">
<tr>
<th>都道府県名</th> 
</tr>	
	
<?php
if(in_array ("神奈川",$prefectures)){//値
	$key=array_search("神奈川",$prefectures,);//キー
	echo "<td>$prefectures[$key]</td>";
	var_dump($prefectures[$key]);
}

?>
</table>
</body>
</html>