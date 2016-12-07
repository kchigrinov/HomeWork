<?php
if (isset($_POST['first'])){
	$a = $_POST['first'];
	function mb_ucFirst($word){
		return mb_strtoupper(mb_substr($word, 0, 1, 'UTF-8'), 'UTF-8') . 
        mb_substr($word, 1, mb_strlen($word, 'UTF-8'), 'UTF-8');
	}
	function getFirstUpper($a){
		$words = explode('. ', $a);
		$sentences = [];
		foreach ($words as $word) {
		$sentences[] = mb_ucFirst($word);
		}
		return implode('. ', $sentences);
	}
 	$result = getFirstUpper($a);	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.</p>

<p>Пример:
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.'</p>

<p>Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>


