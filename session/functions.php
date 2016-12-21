<?php
function setMyCookie($color){
	$colors = [
			'Красный'   => 'red', 
			'Синий'     => 'blue', 
			'Зеленый'   => 'green', 
			'Оранжевый' => 'orange', 
			'Желтый' 	=> 'yellow'
		  ];
	foreach ($colors as $key => $value) {
		if($key === $color){
			$color = $value;
		}
	}
	setcookie('color', $color, time() +5); // Для наглядность вместо 5 мин сделал 5 сек.
	if(isset($_COOKIE['color'])){
		return $_COOKIE['color'];
	}
}
