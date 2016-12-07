<?php
if (isset($_POST['first'])){
	$a = $_POST['first'];
	function getReverseWords($a){
		$words = explode('. ', $a);
		$reverseSentences = [];
		foreach ($words as $word) {
			$reverseSentences[] =  $word;
		}
		$return = array_reverse($reverseSentences);
		return implode(' ', $return);
	}
 	$result = getReverseWords($a);	
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
<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.</p>
<p>Пример:Входная строка: 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';</p>
<p>Строка, возвращенная функцией : 'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>