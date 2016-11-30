<?php
$arr = [ rand(11, 20),rand(1, 10), rand(21, 30), rand(41, 50), rand(31, 40)];
echo '<pre>';
print_r($arr);
echo '</pre>';
$max = max($arr);
$min = min($arr);

foreach ($arr as $key => $value) {
	if($arr[$key] == $max){
		$arr[$key] = $min;
		break;
	}
	if($arr[$key] == $min){
		$arr[$key] = $max;
	}
}

echo '<pre>';
print_r($arr);
echo '</pre>';
