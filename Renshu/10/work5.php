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
<form action="work5.php" method="post">
	<h1 class="col-md-12 text-center">フォーム</h1>
	<table>
		<tr><th>名前</th><td><input type="text" class="form-control" name="name" value="<?php if(isset($_POST["name"])) {echo $_POST["name"]; }; ?>"></td></tr>
		<tr><th>年齢</th><td><input type="text" class="form-control" name="age" value="<?php if(isset($_POST["age"])) {echo $_POST["age"]; }; ?>"></td></tr>
		<tr><th>趣味</th><td><input type="text" class="form-control" name="hobby" value="<?php if(isset($_POST["hobby"])) {echo $_POST["hobby"]; }; ?>"></td></tr>
	<tr>
		<th>都道府県</th>
			<td><select class="form-control" name="prefecture">
				<option value="">選択してください</option>
				<option value="tokyo" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "tokyo"){echo "selected=\"selected\""; }; ?>>東京</option>
				<option value="kanagawa" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "kanagawa") {echo "selected=\"selected\""; }; ?>>神奈川</option>
				<option value="chiba" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "chiba") {echo "selected=\"selected\""; }; ?>>千葉</option>
				<option value="saitama" <?php if((isset($_POST["prefecture"])) && $_POST["prefecture"] == "saitama") {echo "selected=\"selected\""; }; ?>>埼玉</option>
			</td>
			</select>
	</tr>
	<tr>
	<th><label for="movie" class="col-md-3 control-label">好きな映画</label></th>
		<td>
			<label for="action">
				<input type="radio" id="action" name="movie" value="action" <?php if((isset($_POST["movie"])) && $_POST["movie"] == "action"){echo "checked"; }; ?>>
				アクション
			</label>
			<label for="comedy">
				<input type="radio" id="comedy" name="movie" value="comedy" <?php if((isset($_POST["movie"])) && $_POST["movie"] == "comedy"){echo "checked"; }; ?>>
				コメディ
			</label>
			<label for="suspence">
				<input type="radio" id="suspence" name="movie" value="suspence" <?php if((isset($_POST["movie"])) && $_POST["movie"] == "suspence"){echo "checked"; }; ?>>
				サスペンス
			</label>
			<label for="sf">
				<input type="radio" id="sf" name="movie" value="sf" <?php if((isset($_POST["movie"])) && $_POST["movie"] == "sf"){echo "cheked"; }; ?>>
				SF
			</label>
		</td>
	</tr>
	<tr>
	<th>好きな音楽</th>
		<td>
			<label for="pop">
				<input type="checkbox" id="pop" name="music[]" value="pop" <?php if((isset($_POST["music[]"])) && in_array("pop",$_POST["music"])){echo "checked"; }; ?>>
				POP
			</label>
			<label for="rock">
				<input type="checkbox" id="rock" name="music[]" value="rock" <?php if((isset($_POST["msuic[]"])) && $_POST["music"] == "rock"){echo "checked"; }; ?>>
				ロック
			</label>
			<label for="enka">
				<input type="checkbox" id="enka" name="music[]" value="enka"<?php if((isset($_POST["music[]"])) && $_POST["music"] == "enka"){echo "checked"; }; ?>>
				演歌
			</label>
			<label for="randb">
				<input type="checkbox" id="randb" name="music[]" value="randb" <?php if((isset($_POST["music[]"])) && $_POST["music"] == "randb"){echo "checked"; }; ?>>
				R&B
			</label>
		</td>
<tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
</table>
</from>
</body>
</html>