<?php
settype ($egnf9, "string");
$egnf9 = "640624197";
echo "EGN first 9 digits: ", $egnf9, "<br/>";
$egn1 = substr($egnf9, 0,1);
$egn2 = substr($egnf9, 1,1);
$egn3 = substr($egnf9, 2,1);
$egn4 = substr($egnf9, 3,1);
$egn5 = substr($egnf9, 4,1);
$egn6 = substr($egnf9, 5,1);
$egn7 = substr($egnf9, 6,1);
$egn8 = substr($egnf9, 7,1);
$egn9 = substr($egnf9, 8,1);
$d1= intval ($egn1);
$d2= intval ($egn2);
$d3= intval ($egn3);
$d4= intval ($egn4);
$d5= intval ($egn5);
$d6= intval ($egn6);
$d7= intval ($egn7);
$d8= intval ($egn8);
$d9= intval ($egn9);
$ten = $d1*2 + $d2*4 + $d3*8 + $d4*5 + $d5*10 + $d6*9 +$d7*7 +$d8*3 + $d9*6 ;
$d10 = $ten % 11;
if ($d10==0 or $d10==10) {
	$d10=0;
};
echo "Tenth digit is ", $d10;
?> 