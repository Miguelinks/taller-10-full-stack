<?php

$personNumber = " ";
$memberType = "";
const TICKET_PRICE = 25000;


echo "ingrese el numero de personas que ingresan: \n";
  $personNumber = readline();

echo "ingrese el tipo de membresia: \n";
  $memberType = readline();

$totalPay = $personNumber * TICKET_PRICE;

if (strtoupper($memberType) == "A") {
  $totalPay = $totalPay * 0.70;
  echo "el valor a pagar es: $" . number_format ($totalPay);
}
else if (strtoupper($memberType) == "B")
{
  $totalPay = $totalPay * 0.75;
  echo "el valor a pagar es: $" . number_format ($totalPay);
}
else if (strtoupper($memberType) == "C")
{
  $totalPay = $totalPay * 0.90;
  echo "el valor a pagar es: $" . number_format ($totalPay);
}
else if (strtoupper($memberType) == "D")
{
  $totalPay = $totalPay * 0.95;
  echo "el valor a pagar es: $" . number_format ($totalPay);
}
else
{
 echo "no cuenta con ningun descuento, el valor a pagar es: $" . number_format ($totalPay);
}
?>
