<?php

$miVariable = 'Esta es mi primera variable';
$miNumero = 10;
$miDecimal = 10.5;
$miBolean = true;
$miNulo = null;
$miVacio = ' ';


echo$miVariable, '<br>';

var_dump($miVariable);
echo '<br>';

var_dump($miNumero);
echo '<br>';

var_dump($miDecimal);
echo '<br>';

echo $miNumero + $miDecimal;
echo '<br>';

echo $miNumero * $miDecimal;
echo '<br>';

echo $miNumero / $miDecimal;
echo '<br>';

echo $miNumero - $miDecimal;
echo '<br>';

var_dump($miBolean);
echo '<br>';

var_dump($miNulo);
echo '<br>';

var_dump($miVacio);


?>