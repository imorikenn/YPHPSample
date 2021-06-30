<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php 

$num = 10;

echo "ようこそ。<br/>\n";
echo "<hr/>\n";

switch($num){
   case 0:
   echo "在庫切れです。<br/>\n";
   break;

   case 1:
   case 2:
   case 3:
   echo "在庫が僅少です。<br/>\n";
   break;

   default: 
   echo "在庫があります。<br/>\n";
   break;
}

echo "<hr/>\n";
print "ごゆっくりお過ごしください。<br/>\n";

?>

</body>
</html>
