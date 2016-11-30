<?php
$arr = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
echo '<pre>';
print_r($arr);
echo '</pre>';

$result = 1;
$i = 1;
foreach ($arr as $key => $value) {
	if (($key % 2 == 0) && $value >0){
		$result = $result * $value;
	}
	if(($key % 2 != 0) && $value >0){
		echo $value . " $i" . '-ый элемент массива с нечетным индексом <br/>';
		$i++;
	}
}
echo $result . ' Произведение всех четных элментов массива';

// $arr = [];                // Или так надо было создать массив...Я так и не понял)

// for ($i = 0; $i < 100; $i++){
// 	$arr[$i] = rand(1,100);
// }

