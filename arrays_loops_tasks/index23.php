<?php
if(isset($_GET['number'])){
	$number = $_GET['number'];//1234567
	$remainder = '';
	$result = '';
	$count = strlen($number);
	for($i = 0; $i < $count; $i++){
		$remainder = $number % 10;
		$number = ($number - $remainder) / 10;
		$result = $result + $remainder;
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
	<label for result>Результат</label>
	<input type="number" name="result" value="<?=$result?>"/>
	<input type="submit">
</form>
	
</body>
</html>