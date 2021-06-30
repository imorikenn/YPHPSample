<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$a = "日本列島";
$b = "学校法人日本体育大学";
$c = "西日本プロレス";
$d = "西日本新聞";

mb_language("ja");
mb_internal_encoding("UTF-8");

$a = mb_substr($a, 0, 2);
$b = mb_substr($b, 4, -4);
$c = mb_substr($c, 1, -4);
$d = mb_substr($d, 1, -2);

echo "$a<br/>\n";
echo "$b<br/>\n";
echo "$c<br/>\n";
echo "$d<br/>\n";

?>
</body>
</html>