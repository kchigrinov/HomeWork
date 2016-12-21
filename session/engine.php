<?php
require "functions.php";
if(isset($_POST['color'])){
	$color = $_POST['color'];
	setMyCookie($color);
	header('Refresh: 0; newindex.php');
}

