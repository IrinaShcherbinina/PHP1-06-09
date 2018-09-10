<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task1lesson2</title>
</head>
<body>
	<?php
	
	$a = rand(-100, 100);
	$b = rand(-100, 100);
	echo 'a: '.$a.'<br>';
	echo 'b: '.$b.'<br>';
	
	if ($a >= 0 && $b >= 0) {
    	echo 'a - b: '.($a - $b);
	}elseif ($a < 0 && $b < 0) {
    	echo 'a * b: '.($a * $b);
	}else {
    	echo 'a + b: '.($a + $b);
}
	
	?>
</body>
</html>