<?php
header{"Content-type: text/html; charset=utf-8"};
$a = 5;
$b = '05';
echo'<pre>',var_dump($a == $b),'</pre>'; //Оператор == приводит операнды к одному типу и после сравнивает их значения. Так строка '05' была преобразована к типу данных int и значения оказались равными. 0 в PHP в типе данных string при приведении к int, если указан в начале строки ВСЕГДА опускается?
echo'<pre>',var_dump((int)'012345'),'</pre>'; //вручную привели тип данных string к числу тип данных int, поэтому результат 12345. 0 в PHP в типе данных string при приведении к int, если указан в начале строки ВСЕГДА опускается?
echo'<pre>',var_dump((float)123.0 === (int)123.0),'</pre>'; //Оператор тожественного равенства === не выполняет приведения типов и сравнивает сначала то, что типы значений идентичны, например, целые числа, а затем сравнивает их значения. И если они одинаковы, то только в таком случае возвращает true. В примере тип данных разный, поэтому False
echo'<pre>',var_dump((int)0 === (int)'hello, word'),'</pre>';//hello, word нельзя тип данных привести к числу, результат будет 0, а 0 === 0, поэтому True


?>
