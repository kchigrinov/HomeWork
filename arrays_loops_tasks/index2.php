<?php
$arr = ['1', '20', '15', '17', '24', '35'];
$result = '';
foreach ($arr as $value){
	$result = $result + $value;
}
echo $result;