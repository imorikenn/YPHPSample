<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

echo "変数\$aが使えます。<br/>\n";
echo "変数\$aの値は{$a}です。<br/>\n";
//echo "変数\$bの値は{$b}です。<br/>\n";
//echot"変数\$cの値は{$c}です。<br/>\n";


funcB();
funcC();

function funcB()
{
   $b = 1;

	echo "<hr/>\n";
	echo"funcB関数では変数\$bが使えます。<br/>\n";
	//print "変数\$aの値は{$a}です。<br/>\n";
	print "変数\$bの値は{$b}です。<br/>\n";
	//print "変数\$cの値は{$c}です。<br/>\n";
	print "<hr/>\n";
}

function funcC()
{
   $c = 2;

	echo "<hr/>\n";
	echo "funcC関数では変数\$cが使えます。<br/>\n";
	//echo "変数\$aの値は{$a}です。<br/>\n";
	//echo "変数\$bの値は{$b}です。<br/>\n";
	echo "変数\$cの値は{$c}です。<br/>\n";
	echo "<hr/>\n";
}

?>

</body>
</html>