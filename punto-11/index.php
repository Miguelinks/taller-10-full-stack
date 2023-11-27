<?php

$sum=0;

for ($i = 1; $i <= 100; $i=$i+2) {

  echo $i." ";

  $sum=$sum+$i;    
}
echo "\nLa suma de los numeros impares es: ".$sum;
?>