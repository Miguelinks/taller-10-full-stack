<?php

const TICKET_PRICE = 25000;
$memberShipType = "";
$personNumer = 0 ;

echo "ingrese numero de personas que ingresan \n";
$personNumer = readline();

echo "ingrese tipo de membresia \n" ;
$memberShipType = readline();

$totalPrice = $personNumer * TICKET_PRICE;

if ($memberShipType == "A" || $memberShipType == "B"){

  $totalPay = $totalPrice * 0.7;

  echo "el total a pagar es: $" . $totalPay;
}else{
  echo " no tiene ningun descuento, el total a pagar es: $" . $totalPrice;
}
?>