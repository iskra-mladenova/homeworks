<?php
$a = 100;
$b = 25;
$c = 20;
if ($a < $b ) {
	if ($b < $c ) {
		echo $a, " ", $b, " ", $c;
	}
	else  {
		$d = $c;
		$c = $b;
		$b = $d;
		echo $a, " ", $b, " ", $c;
	}
}
	$d = $a;
	$a = $b;
	$b = $d;
	if ($b < $c ) {
		echo $a, " ", $b, " ", $c;
	}
	else  {
		$d = $c;
		$c = $b;
		$b = $d;
	}
	if ($a < $b ) {
		echo $a, " ", $b, " ", $c;
	}
	else {
		$d = $a;
		$a = $b;
		$b = $d;
		echo $a, " ", $b, " ", $c;
	}
?>