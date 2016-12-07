<?php
if(isset($_POST['first']) && isset($_POST['second'])){
	$a = $_POST['first'];
	$b = $_POST['second'];
	function getCommonWords($a, $b){
		$leftWords = explode(' ', $a);
		$rightWords = explode(' ', $b);
		foreach ($leftWords as $leftWord) {
			foreach ($rightWords as $rightWord) {
				if($leftWord == $rightWord){
					$return[] = $leftWord;
					break; // На случай, если во втором поле несколько раз введут одно и то же слово.
				}
			}
		}
		return implode(' ', $return);
	}

 	$result = getCommonWords($a, $b);	
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
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<textarea name="second" style="float:left" placeholder="<?=isset($_POST['second'])?$_POST['second']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>
