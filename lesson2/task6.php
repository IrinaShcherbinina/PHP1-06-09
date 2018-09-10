<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task6lesson2</title>
</head>
<body>

<!--С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.-->
	<?php

echo power(2, -9) . '<br>';
echo power(2, 9) . '<br>';
echo power(2, 0);

function power($val, $pow){
    if ($pow > 0) return $val * power($val, $pow - 1);
    if ($pow < 0){
        $a = power($val, $pow - $pow * 2);
        return 1 / $a;
    }
    return 1;
}
	?>
</body>
</html>