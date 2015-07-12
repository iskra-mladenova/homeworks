<?php
$filmi = array ('Vchera' => 'Ivav Ivanov', 'Daleche daleche' =>'Tom Kruz', 'film3' => 'Main actor 3', 'film4' => 'Main actor 4', 'film5' => 'Main actor 5');
foreach ($filmi as $k => $v) {
	echo "$k - $v <br/>";
}	
echo " <br/> Vchera - {$filmi ['Vchera']} <br/>";
echo "Daleche daleche - {$filmi ['Daleche daleche']} <br/>";

?> 