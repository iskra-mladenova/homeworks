<?php
$x = 55;
$y = 35;
$n=0;
if ($x < $y) $n = $x;
 while ($n >= $x and $n <= $y) {
	echo "$n ";
	$n++;
	 }
if ($x>$y) $n = $y;
while ($n >= $x and $n <= $y) {
echo "$n ";
 $n--;
}
?> 
