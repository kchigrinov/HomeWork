<?php
if (isset($_POST['first'])){
	$a = $_POST['first'];
	function getUnique($a){
		$words = explode(' ', $a);
		$wordKeys = [];
		foreach ($words as $word) {
			$wordsKeys[$word] = true;
		}
		$return = array_keys($wordsKeys);
		return implode(' ', $return);
	}
 	$result = getUnique($a);	
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
<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>