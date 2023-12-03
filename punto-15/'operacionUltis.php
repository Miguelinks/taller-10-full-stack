<?php

function getNumber () {
  echo "Ingrese un numero para operar: \n";
  return readline();
}

function showMenu(){
  echo "Seleccione una opcion: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";
  return readline();
}

function operate($x, $y, $option) {
  switch ($option) {
  case 1 :
    return add ($x, $y);
  case 2 :
    return sub ($x, $y);
  case 3 :
    return dot ($x, $y);
  case 4 :
    return split ($x, $y);
  default :
    echo "Opcion no valida";
  return 0;
    }
}

function add ($x, $y){
  return $x + $y;
}

function sub ($x, $y){
  return $x - $y;
}

function dot ($x, $y){
  return $x * $y;
}

function split ($x, $y){
  return $x / $y;
    }

?>