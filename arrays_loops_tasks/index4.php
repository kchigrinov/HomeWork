<?php 
$arr = array(
  		"green" =>	"зеленый",
  		"red"	=>	"красный",
  		"blue"	=>	"синий"); 

echo '<div style = "float:left; margin-right: 20px;">';
foreach($arr as $key => $value){
	echo $key . '</br>';
}
echo '</div>';


foreach($arr as $value){
	echo $value . '</br>';
}