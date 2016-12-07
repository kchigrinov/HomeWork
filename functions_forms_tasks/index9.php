<?php
if(isset($_POST['first'])){
	$a = $_POST['first'];
	function getReverse($a){
	    preg_match_all('/./u', $a, $ar);
	    return join('',array_reverse($ar[0]));
	}
	
 	$result = getReverse($a);	
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
<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>
<form method="post">
	<textarea name="first" style="float:left" placeholder="<?=isset($_POST['first'])?$_POST['first']:false?>" cols="40" rows="10" ></textarea>
	<input type="submit" value="Сравнить";/>
	<textarea placeholder="результат" cols="40" rows="10"><?=isset($result)?$result:false;?></textarea>

</form>