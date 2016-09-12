<?php
$a=4;
$b=3;
$c=1;
if($a>$b&&$a<$c||$a>$c&&$a<$b)
	echo "Valor del medio es ".$a;
else if($b>$a&&$b<$c||$b>$c&&$b<$a)
	echo "Valor del medio es ".$b;
else if($c>$a&&$c<$b||$c>$b&&$c<$a)
	echo "Valor del medio es ".$c;
else
echo "No hay valor intermedio";
?>