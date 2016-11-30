<?php 
  $arr = array(
  			"Коля"	=>	"200",
  			"Вася"	=>	"300",
  			"Петя"	=>	"400"); 

echo "<div style='float:left; margin-right:20px;'>";

foreach ($arr as $key => $value) {
	echo $key . ' — зарплата ' . $value . ' долларов' . '<br/>';
}

echo '</div>';

// Втроой вариант
foreach ($arr as $key => $value) {
	echo "{$key} — зарплата {$value} долларов <br/>";
}


