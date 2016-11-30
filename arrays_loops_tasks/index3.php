<?php
$arr = ['26', '17', '136', '12', '79', '15'];
$result = '';
foreach ($arr as $value) {
	$result = $result + $value * $value; //Можно без скобок, т.к. умножение выполнится первым.
}
echo $result;