<?php
if (isset($_POST['first'])){
	$a = $_POST['first'];
	function getCountWords($a){
		$words = explode(' ', $a);
		$countWords = [];
		$cherry = 1;
		$apple = 1;
		$cherries = 1;
		$pear = 1;
		foreach ($words as $word) {
			switch ($word) {
				case 'вишня':
					$countWords[$word] = $cherry;
					$cherry++;
					break;
				case 'яблоко':
					$countWords[$word] = $apple;
					$apple++;
					break;
				case 'черешня':
					$countWords[$word] = $cherries;
					$cherries++;
					break;
				case 'груша':
					$countWords[$word] = $pear;
					$pear++;
					break;
			}
		}
		arsort($countWords);
		foreach ($countWords as $key => $word) {
			$return[] = $key. ' - ' . $word;
		}
		return implode("\n", $return);
	}
 	$result = getCountWords($a);	
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
<p>13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';</p>
<p>Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества:</p>
Пример вывода:<br/>
яблоко – 12<br/>
черешня – 8<br/>
груша – 5<br/>
слива - 3<br/>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>