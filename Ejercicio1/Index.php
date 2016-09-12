<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero=0;
$suma=0;

echo "Numeros Sumados:"."<br/>";
do
{
	
	$numero++;
	$suma += $numero;
	echo $suma."<br/>";
	if($suma >1000)
		break;
	
}while($suma<1000);
echo "Cantidad de numeros sumados es ".$numero;
?>
</body>
</html>

