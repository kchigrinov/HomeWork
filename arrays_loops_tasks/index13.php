<?php
$result = '';
for($i = 1; $i <= 10; $i++){
	echo "<div style = 'float:left; margin-right:10px; border: 1px solid black;'";
	for($x = 0; $x <=10; $x++){
		$result = $i * $x;
		echo "$i * $x = $result <br/>";
	}
	echo "</div>";
}

//Второй вариант, правда не смог перенести колонки как в первом примере.
$result = '';
$table = '';
for($i = 1; $i <= 10; $i++){
	for($x = 1; $x <= 10; $x++){
		$result = $i * $x;
		$table .= <<<TABLE
		<tr style="border: 1px solid black;">
			<td>$i</td>
			<td>*</td>
			<td>$x</td>
			<td>=</td>
			<td>$result</td>
		</tr>

		<!--
			<td>$i*$x=$result</td> Можно и так
		--!>
		
TABLE;
	}
}
echo '<table style="border-collapse: collapse; border: 1px solid black; height:100px;">' . $table . '</table>';



