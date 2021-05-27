<?php
    //inicio-termina-//
$limit = 20 ;

for ($i=0; $i<=$limit ; $i++) { 
    print 'El conteo va en ' . $i . '<br> ';
}
echo '<br>';

echo 'while multiplica 5 *2 hasta el limite que es 20, 5*2=10 luego sigue el ciclo 10*2=20  y luego 20*2=40 y ahi termina el cliclo';
echo '<br>';
echo '<br>';

 $a = 5;
 while ($a <= $limit) {
     $a = $a * 2;
     echo "$a es $a <br>";

 }

//mostrar los numeros pares desde el 0 hasta el 100//
 for ($i=1; $i <=100 ; $i+=1) { 
     if ($i % 2 ==0) {
         echo"Este numero es par . $i <br>";
     }
 }
 //mostrar los numeros pares e impares desde el 0 hasta el 100//
 echo "<br>";
$inc = 1;
while ($inc <= 30) { 
    $num = "El numero $inc es ";

    echo "<br>";

    if ($inc % 2 === 0) {
        echo "$num  par";
       
    } else {
        echo "$num  impar";
    }
    echo "<br>";
$inc ++;
}








?>      