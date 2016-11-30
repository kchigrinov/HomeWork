<?php
$s = 100;
$t = 5;
$speedKilometrsPerHour = $s / $t;
$speedMetrsPerSecond = $speedKilometrsPerHour / 3.6; // Скорость м/с = (Скорость км/ч) * 1000(м) / 3600(с)
echo $speedKilometrsPerHour . ' км/ч' . '<br/>';
echo round($speedMetrsPerSecond, 2) . ' м/с';