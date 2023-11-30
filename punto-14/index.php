<?php

include "./passwordCheck.php";

$user = "";
$password = "";

echo "Digite su usario : \n";
$user = readline();

echo "Digite su contraseña: \n";
$password = readline();

if (hasSecurityLenght($password)) {
  if (hasUpperLetter($password)) {
    if (hasNumber($password)){
        echo "Su contraseña cumple con los parametros requeridos y quedo registrada";
      } else {
        echo "Su contraseña no tiene numeros\n";
      }
  } else {
    echo "su contraseña no tiene letras mayusculas \n";
  }
} else { 
  echo "su contraseña no tiene una longitud valida \n";
}

?>