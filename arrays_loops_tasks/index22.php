<?php
$line = '';
while(strlen($line) < 8){
		$line .= 'xx';
		echo $line . '<br/>';
}

echo '<===========>Второй вариант<br/>';

$line = '';
$i = 0;
while($i < 4){
	$i++;
	$line .= 'xx';
	echo $line . '<br/>';
}

echo '<===========>Третий вариант<br/>';

$line = '';
for($i = 0; $i < 4; $i++){
	$line .= 'xx';
	echo $line . '<br/>';
}