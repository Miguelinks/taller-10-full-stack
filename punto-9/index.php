<?php
$number = 0;
$multip = 0;

echo "Ingrese el numero a multiplicar: \n";
$number = readline();

while ($multip <= 30) {
  $total = $number * $multip;
  echo $number ."X".$multip."=".$total . "\n";
  $multip ++;
    }
?>
  