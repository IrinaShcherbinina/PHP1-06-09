<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task3lesson2</title>
</head>
<body>
	<?php
	echo div(5, 0);
	
	function sum($a, $b){
    	return $a + $b;
	}
	function dif($a, $b){
    	return $a - $b;
	}
	function mult($a, $b){
    	return $a * $b;
	}
	function div($a, $b){
    	if ($b == 0) return 'На ноль делить нельзя';
    		return $a / $b;
}
	?>
</body>
</html>