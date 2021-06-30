<!DOCTYPE html>
<html>
<head>
	<title>サンプル</title>
</head>
<body>

<form action="http://localhost/YPHPSample/12/sample4.php "method="post">
ファイル名:<input type ="text" name="title"/><br/>
<textarea rows="10" cols="50" name="content">

<? php

if(isset($_POST["title"])) && file_exists($_POST["title"]){
	$fp = fopen($_POST["title"],"r");
	while(!feof($fp))[
		echo fgets($fp)
	}
	fclose($fp)
}

?>

</textarea><br/>
<input type="submit" value="読込">
</form>
<body>
</html>










