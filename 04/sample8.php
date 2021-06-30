<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php 

$num = 0;
$store = true;

echo "ようこそ。<br/>\n";
echo "<hr/>\n";

if($num <=  0 && $store == true){
   print "お取り寄せ可能です。<br/>\n";
}
else if($num <=  0 && $store == false){
   echo "在庫切れです。<br/>\n";
}
else if($num <= 3){
   echo "在庫が僅少です。<br/>\n";
}
else{
   echo "在庫があります。<br/>\n";
}

echo "<hr/>\n";
echo "ごゆっくりお過ごしください。<br/>\n";

?>

</body>
</html>