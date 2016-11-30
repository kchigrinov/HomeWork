<?php
$week = ['Monday', 'Tuestday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = 'Tuestday';
foreach ($week as $value) {
	if($day == $value){
		echo "<em>$value</em><br/>";
	}
	else{
		echo $value . '<br/>';
	}
}