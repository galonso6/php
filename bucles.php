<?php
    //inicio-termina-//
$limit = 20 ;

for ($i=0; $i <= $limit; $i++) { 
  echo 'El conteo va en ', $i . '<br>' ;
}


$a = 5;                 
while ($a <= $limit) {
    $a = $a * 2;

    echo "a es $a <br>";
}

//mostrar los numeros pares desde el 0 hasta el 100//




$motos = [
'Zusuki',
'Akt',
'CBR 250R',
];
foreach ($motos as $key => $value) {
    echo "llave: $key y valor: $value <br>";
}

var_dump($motos);
echo "<br>";

$autos = [
    'Mazda'=> [
        'CX5';
        '323';
        'CX7';
        '2';
    ];

];