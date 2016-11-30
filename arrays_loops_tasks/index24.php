<?php
if(isset($_GET['number'])){
	$number = $_GET['number'];
	$number2 = $_GET['number2'];
	$count = strlen($number);
	$remainder = '';
	$result = '';
	for($i = 0; $i < $count; $i++){
		$remainder = $number % 10;
		if($number2 == 0){
			echo 'Введите любое число кроме нуля' . '<br/>';
			break;
		}
		else{
			if($remainder / $number2 == 1){
			$result++;
			}
		}
		$number = ($number - $remainder) / 10;
	}
	if($result == 0 && $number2 !=0){
		echo 'Не нашлось ни одного вхождения';
	}
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Program</title>
</head>
<body>

<form method="get">
	<label for number>Введите число</label>
	<input type="number" name="number" value="<?=$_GET['number'];?>"/>
	<label for number>Введите число, чтоб увидить количество вхождений</label>
	<input type="number" name="number2" value="<?=$_GET['number2'];?>"/>
	<label for result>Результат вхождений</label>
	<input type="number" name="result" value="<?=$result?>"/>
	<input type="submit">
</form>
	
</body>
</html>
