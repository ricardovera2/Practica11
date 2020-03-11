<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica11-Variables</title>
</head>
<body>  

<h1>Variable</h1>
<?php
$nombre = 'Velazquez Ramirez RIcardo de Jesus';
$edad = 20;
$beca= 3500.50;
$status=true;
echo "Tipos de variables <br>";
echo $nombre. '</br>';
echo $edad. '</br>';
echo $beca. '</br>';
echo $status. '</br>';

echo $nombre.'tiene' .$edad. 'años de edad y gana'.$beca. '</br>';
 
?>
<h1> operadores</h1>
<?php

$numero1 =10;

$numero2 =5;

$suma = $numero1+$numero2;

$resta = $numero1-$numero2;
$multi = $numero1*$numero2;
$divi = $numero1/$numero2;
echo 'La suma es=' .$suma. '</br>';
echo 'La resta es=' .$resta. '</br>';

echo 'La multiplicacion es=' .$multi. '</br>';
echo 'La division es=' .$divi. '</br>'  ;
echo 'el autoincremento es =' .$suma++. '</br>';

echo 'el decremento es =' .$suma--. '</br>';
echo 'el residuo es= ' .$numero1%$numero2;
?>



   
</body>
</html>