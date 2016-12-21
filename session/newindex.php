<?php
header('Refresh: 5'); // Для наглядность вместо 5 мин сделал 5 сек.
if(!isset($_COOKIE['color'])){ // Если время жизни куки истекло, перенаправляем на начальную страницу.
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background-color:<?=isset($_COOKIE['color'])?$_COOKIE['color']:'white';?>">
	<form method="post" action="engine.php">
		<select name="color">
			<option>Красный</option>
			<option>Синий</option>
			<option>Зеленый</option>
			<option>Оранжевый</option>
			<option>Желтый</option>
		</select>
		<input type="submit" value="Поменять цвет"/>
	</form>
</body>
</html>