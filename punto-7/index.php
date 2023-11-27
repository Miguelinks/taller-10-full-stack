<?php

  $operation = 0;
  $firstNumber = 0;
  $secondNumber = 0;
  $result = 0;
  // process
  echo "Digite el primer numero a operar: \n";
  $firstNumber = readline ();

  echo "Digite el segundo numero a operar: \n";
  $secondNumber = readline();

  echo "Escoja la operacion que de sea realizar: \n";
  echo "1 - Sumar \n";
  echo "2 - Restar \n";
  echo "3 - Multiplicar \n";
  echo "4 - Dividir \n";
 
  $operation = readline();

  switch ($operation){
  case 1:
    $result = $firstNumber + $secondNumber;
    break;
  case 2:
    $result = $firstNumber - $secondNumber;
    break;
  case 3:
    $result = $firstNumber * $secondNumber;
    break;
  case 4:
    $result = $firstNumber / $secondNumber;
    break;
  default:
    echo "Digite una opcion valida \n";
  }

  echo "El resultado de la operacion es: " . $result . "\n";

?>