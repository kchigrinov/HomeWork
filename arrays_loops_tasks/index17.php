<?php
$year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = 'November';
foreach ($year as $value) {
	if($value == $month){
		echo "<strong>$value</strong></br>";
	}
	else{
		echo $value . '</br>';
	}
}