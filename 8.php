<?php
$age = 25;
if (is_numeric($age)){
	if ($age >= 0 && $age <= 17){
		echo "Вам еще рано работать";
	}
	else if ($age >= 18 && $age <= 59){
		echo "Вам еще работать и работать";
	}
	else if ($age > 59){
		echo "Вам пора на пенсию";
	}
	else{	//Тут не ставил условие $age < 0 т.к. в этот else и так попадают только отрицательные числа.
		echo "Неизвестный возраст";
	}
}
else{
		echo "Неизвестный возраст";
	}