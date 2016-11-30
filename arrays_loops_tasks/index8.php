<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
	echo '&shy' . (string)$value; //  &shy у меня кстати дефис в браузере не видно)
}

echo '<br/>';

foreach ($arr as $value) {
	var_dump($value); //Видно, что все значения строковые.
}

