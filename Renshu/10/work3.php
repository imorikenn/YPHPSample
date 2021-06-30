<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
<style type="text/css">
form{
	width: 500px;
	margin: 0 auto;
	padding: 20px;
	text-align: center;
	background-color: #b5eafc;
}
table{
	width: 100%;
}
th{
	text-align:right;
	font-weight:normal;
}
td{
	text-align:left;
}
input.form-control{
	padding: 2px 5px;
	width: 80%;
	line-height: 25px;
}
input.btn{
	padding: 2px 5px;
	height: 40px;
	width: 100px;
}
</style>
</head>
<body>
<form action="work3.php" method="post">
	<h1 class="col-md-12 text-center">フォーム</h1>
	<table>
		<tr><th>名前</th><td><input type="text" class="form-control" name="name" value="<?php if(isset($_POST["name"])) {echo $_POST["name"]; }; ?>"></td></tr>
		<tr><th>年齢</th><td><input type="text" class="form-control" name="age" value="<?php if(isset($_POST["age"])) {echo $_POST["age"]; }; ?>"></td></tr>
		<tr><th>趣味</th><td><input type="text" class="form-control" name="hobby" value="<?php if(isset($_POST["hobby"])) {echo $_POST["hobby"]; }; ?>"></td></tr>
	<tr>
		<th>都道府県</th>
			<td><select class="form-control" name="prefecture">
				<option value="">選択してください</option>
				<option value="tokyo" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "tokyo"){echo "selected"; }; ?>>東京</option>
				<option value="kanagawa" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "kanagawa") {echo "selected"; }; ?>>神奈川</option>
				<option value="chiba" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "chiba") {echo "selected"; }; ?>>千葉</option>
				<option value="saitama" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "saitama") {echo "selected"; }; ?>>埼玉</option>
			</td>
	</tr>
<tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
	</select>
</table>
</from>
</body>
</html>
