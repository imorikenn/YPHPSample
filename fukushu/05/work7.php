<?php
for($i=2; $i<101; $i++){
	$a = true;
	for ($j=2; $j<$i; $j++){
		if($i % $j==0){
		$a = false;
		break;
		}
	}
	if($a){
		echo "$i,";
	}
}
?>

</body>
</html>
