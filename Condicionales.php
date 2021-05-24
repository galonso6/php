<?php

$x = 10;
$y = '10';

if ($x===$y) {
    echo 'Son iguales';
    
}
echo '<br>';

if ($x===$y) {
    echo 'Son identicos';
}else {
    echo 'No son identicos';
}

echo '<br>';

if ($x != $y) {
    echo 'Si son diferentes';
}

echo '<br>';

if ($x !== $y) {
    echo 'Si son diferentes de identicos';
}
echo '<br>';

if ($x > $y) {
    echo "$x Es mayor que $y";
}elseif ($x < $y) {
    echo "$x Es menor que $y";
}elseif ($x == $y) {
    echo "$x Es igual que $y";
}else {
    echo "Ninguna de las anteriores";
}

echo '<br>';
if (($x == $y) && ($x === 0)) {
    echo "$x Es igual que $y y $x Es mayor que 0";
}


if (($x == $y) || ($x > 0)) {
    echo "$x Es igual que $y ó $x Es es identico $y";
}
?>