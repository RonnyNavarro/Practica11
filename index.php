<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 11 - Variables</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>VARIABLES</h1>
<?php
$nombre='Ronny Rodman Navarro Laguna';
$edad=23;
$beca=0.00;
$salario=100.00;
$estatus=True;
echo "Tipos de variables <br>";
echo $nombre. '<br/>';
echo $edad. '<br/>';
echo $beca. '<br/>'; 
echo $estatus. '<br/>'; 
echo $salario. '<br/>';

echo $nombre.' Tiene '.$edad.' años de edad y gana: '.$salario.'<br/>';
'<br/>';

'<br/>';
echo "Operaciones Aritméticas <br>";
$datos='2,7,4,3,6';
$suma= 2+7+4+3+6;
$resta=2-7-4-3-6;
$multiplicacion=2*7*4*3*6;
$division=2/7/4/3/6;


echo "Resultados <br>";
echo $datos. '<br/>';
echo $suma. '<br/>';
echo $resta. '<br/>'; 
echo $multiplicacion. '<br/>'; 
echo $division. '<br/>';








?>

    

</body>
</html>