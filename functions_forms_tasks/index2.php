<?php
if(isset($_POST['first'])){
	$a = $_POST['first'];
	function getLongestWords($a){
		$words = explode(' ', $a);
		$wordsLength = [];
		foreach ($words as $word) {
			$wordsLength[mb_strlen($word, 'UTF-8')] = $word;
		}
		ksort($wordsLength);
		for($i = 0; $i <= 2; $i++){
			$return[] = array_pop($wordsLength);
		}
		return implode(' ', $return);
	}

 	$result = getLongestWords($a);	
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
<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>