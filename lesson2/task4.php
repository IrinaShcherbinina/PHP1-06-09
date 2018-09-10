<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task4lesson2</title>
</head>
<body>
	<?php
	
	
	echo "Первый аргумент: ", $arg1 = rand( -99, 99), "<br>";
	echo "Второй аргумент: ", $arg2 = rand( -99, 99), "<br>";
	echo "Выбранная операция: ", $operation = "+", "<br>";
					
	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation){
			case "+":
			return $arg1+$arg2;
			break;
							
			case "-":
			return $arg1-$arg2;
			break;
							
			case "*":
			return $arg1*$arg2;
			break;
							
			case "/":
			return $arg1/$arg2;
			break;
		}
						
	}
	
	echo $arg1, $operation, $arg2 ," = ", mathOperation($arg1, $arg2, $operation);
							
	?>
</body>
</html>