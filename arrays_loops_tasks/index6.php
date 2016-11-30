<?php
$arr = array(
  		"green" =>	"зеленый",
  		"red"	=>	"красный",
  		"blue"	=>	"синий"); 
$en = [];
$ru = [];

foreach ($arr as $key => $value) {
	$en[] = $key;
}
foreach ($arr as $value) {
	$ru[] = $value;
}

echo '<div style = "float:left; margin-right: 20px;"><pre>';
echo '$en ';
print_r($en);
echo '</pre></div>';

echo '<div style = "float:left; margin-right: 20px;"><pre>';
echo '$ru ';
print_r($ru);
echo '</pre></div>';




