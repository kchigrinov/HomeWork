<?php
$line = '';
for($i = 1; $i <= 9; $i++){
	for($x = 0; $x < $i; $x++){
		$line .= $i;
	}
	echo $line . '<br/>';
	$line = '';
	$x = 0;
}