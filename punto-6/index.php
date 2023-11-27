<?php

$name = "";
$age = 0;

echo "digite su nombre completo \n";
$name = readline();

echo "Digite su edad\n";
$age = readline();

if ($age >= 18){
  echo "Hola $name usted es mayor de edad";
}else{
echo "Hola $name usted es menor de edad";
}
?>