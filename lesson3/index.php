<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson3_Shcherbinina_Irina</title>
</head>
<body>
	<?php

/*
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
*/
	$number = 1;
	
	while ($number < 100) {
    	if ($number % 3 == 0) {
        echo $number++ . ' ';
    	}
    	$number++;
		}
echo '<hr>';
/*
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
*/
	$number = 0;
		do {
    		if ($number == 0) {
        		echo $number . ' – это ноль.' . '<br>';
        		$number++;
    		} elseif ($number % 2 != 0) {
        		echo $number . ' – нечетное число.' . '<br>';
				$number++;
    		} else {
        		echo $number . ' – четное число.' . '<br>';
        		$number++;
    		}
			} while ($number < 11);
echo '<hr>';
/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
*/
	$areaArr = [
    	'Россия:' => ['Москва', 'Калининград', 'Кемерово'],
    	'Скандинавия:' => ['Оребро', 'Хельсинки', 'Осло', 'Стокгольм'],
    	'Европа:' => ['Париж', 'Любляна', 'Вена', 'Копер', 'Копенгаген']
	];
	
	function displayCity($arr){
    	if (!is_array($arr)) {
        	return print "incorrect argument '{$arr}'";
    }
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
                if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . '<br>';
            	} else {
                  echo $arr[$key][$i] . ', ';
            }
        }
    }
}
	displayCity($areaArr);
echo '<hr>';
/*
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.
*/
	function transLit($text){
		$alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m',
						 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh',
						 'щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya', 
						 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',  'Д' => 'D',  'Е' => 'E', 'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z', 'И' => 'I',
						 'Й' => 'J',   'К' => 'K', 'Л' => 'L',   'М' => 'M',   'Н' => 'N', 'О' => 'O',   'П' => 'P',   'Р' => 'R', 'С' => 'S',   'Т' => 'T',
						 'У' => 'U', 'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C', 'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH', 'Ь' => '\'',  'Ы' => 'Y\'',
						 'Ъ' => '\'\'', 'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA');

		$text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
		$text = '';

		foreach($text_a as $val) {
    		$text .= (isset($alfavit[$val])) ? $alfavit[$val] : $val; 
		}
		return $text;
		}

		$text = "Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания. Написать функцию транслитерации строк";
		echo transLit($text);

	echo '<hr>';
/*
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/
	function replaceSpace($str){
    	if (!is_string($str)) {
        return "incorrect argument {$str}";
    	}
    	return preg_replace('/\s/', '_', $str);
	}
	echo replaceSpace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');
echo '<hr>';
/*
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
*/
$menuArr = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 4' => ['PodSubmenu 444', 'PodSubmenu 444-444']]
	];
		
	function menuRender($arr){
    		if (!is_array($arr)) {
        	return 'incorrect argument';
    	}
    
		$renderArr[] = '<ul>';
    
		foreach ($arr as $key => $value) {
          if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    	$renderArr[] = '</ul>';
    	return implode($renderArr);
	}
	echo menuRender($menuArr);
echo '<hr>';
/*
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}
*/
	for ($i = 0; $i < 10; print $i++ . ' ') {
	};
	echo '<hr>';

	// 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
	
	function searchCity($char, $arr){
    	if (!is_array($arr) || !is_string($char)) {
        	return print 'incorrect arguments.';
    	}
    
		$wrongCity = 0;
    	$cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
    	
		foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
                        $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            
            if ($explodeArr[0] == $char) {
                echo implode($explodeArr) . '<br>';
            } else {
                $wrongCity++;
                    if ($wrongCity == $cityCount) {
                    return print "Города на букву '{$char}' в массиве нет.";
                }
            }
        }
    }
}
	searchCity('К', $areaArr);
echo '<hr>';
/*
9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания 
(аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). */

	function translitNext($text){
    	if (!is_string($text)) {
        	return 'incorrect argument';
    		}
		
		$alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m',
						 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh',
						 'щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya', 
						 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',  'Д' => 'D',  'Е' => 'E', 'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z', 'И' => 'I',
						 'Й' => 'J',   'К' => 'K', 'Л' => 'L',   'М' => 'M',   'Н' => 'N', 'О' => 'O',   'П' => 'P',   'Р' => 'R', 'С' => 'S',   'Т' => 'T',
						 'У' => 'U', 'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C', 'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH', 'Ь' => '\'',  'Ы' => 'Y\'',
						 'Ъ' => '\'\'', 'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA');

		$text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

		$requestedArr =[];
		
        for ($i = 0; $i < count($text_a); $i++) {
        	foreach ($alfavit as $key => $value) {
            	if ($text_a[$i] == $key) {
                	$requestedArr[] = $value;
                	break;
                
            	} elseif (preg_match('/[[:punct:]]|\s/', $text_a[$i])) {
                	$requestedArr[] = $text_a[$i];
                	break;
            	}
        	}
		}
    
    	return preg_replace('/\s/', '_', implode($requestedArr));
	}
	
	echo translitNext('Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания 
(аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах)');
	?>
</body>
</html>
