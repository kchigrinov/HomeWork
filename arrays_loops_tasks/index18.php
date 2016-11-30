<?php
$week = ['Monday', 'Tuestday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$weekend = ['Saturday', 'Sunday'];
foreach ($week as $workDay) {
	foreach ($weekend as $endDay) {
		if($endDay == $workDay){
			echo "<strong>$endDay</strong></br>";
			break;
		}
	}
	if($endDay != $workDay){
		echo $workDay . "</br>";
	}
}

echo '<---------------------------------></br>';

//Второй вариант
$week = ['Monday', 'Tuestday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$Saturday = 'Saturday';
$Sunday = 'Sunday';
foreach ($week as $value) {
	if($value == $Sunday || $value == $Saturday){
		echo "<strong>$value</strong></br>";
	}
	else{
		echo $value . "</br>";
	}
}
