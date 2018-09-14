<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task7lesson2</title>
</head>
<body>
<?php
	function getTimeEnding($number, $endingArray){
    		if ($number >= 11 && $number <= 29) {
        		$ending = $endingArray[2];
    		} else {
        		$i = $number % 10;
        
		switch ($i) {
    			case 1:
        			$ending = $endingArray[0];
        			break;
        		case 2:
        		case 3:
        		case 4:
        			$ending = $endingArray[1];
        			break;
        		default:
       				 $ending = $endingArray[2];
        		}
    		}
    	return $ending;
	}
$hours = date('H');
$minutes = date('m');
	 
echo $hours . ' ' . getTimeEnding($hours, array('час', 'часа', 'часов')) . ' ' .
    $minutes . ' ' . getTimeEnding($minutes, array('минута', 'минуты', 'минут'));
	
?>
</body>
</html>
