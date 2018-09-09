<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>lesson1task7</title>
</head>

<body>
    <?php
    $a = 18;
    $b = 'Irina';
    $d = $a + 1;
	$e = $d + 1;
	$date = date('Y-m-d H:i:s');
	
	$str = "Меня зовут {$b}, мне {$a} лет. Через год мне будет {$d} лет. А еще через год мне будет {$e} лет. <br/> На моих часах сейчас {$date}";
 	$str = str_replace(" ", "_", $str);
	echo ($str);
	echo "<br>";
	echo(strstr($str, "На"));

	

    ?>
</body>

</html>
