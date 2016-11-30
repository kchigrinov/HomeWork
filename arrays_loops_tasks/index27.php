<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row = 5;
$coll = 8;
$count = count($colors) - 1;
echo '<table>';
for($i = 1; $i <= $row; $i++){
	echo '<tr>';
	for($x = 1; $x <= $coll; $x++){
		echo '<td style=' . '"background-color:' . $colors[rand(0,$count)] . '">' . rand(0,2000) . '</td>';
	}
	echo '</tr>';
}
echo '<table/>';