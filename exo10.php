<?php

$bill10=10;
$bill5=5;
$coin2=2;
$coin1=1;

$price = 152;
$moneygive = 200;
$moneyback =48;

echo"Montant à payer: $price €<br>";
echo"Montant versé : $moneygive €<br>";
echo"Reste a payer : $moneyback €<br>";
   if($moneygive>$price && $price>0)
   {
    $nbill10=intdiv($moneyback,10);
    $nbill5=intdiv($moneyback-(10*$nbill10), 5);
    $ncoin2=intdiv($moneyback-(10*$nbill10+5*$nbill5),2);
    $ncoin1=intdiv($moneyback-($nbill10*10+5*$nbill5+2*$ncoin2),1);
    }
echo"Rendue de monnaie:<br>";
echo"$nbill10 billets de 10 € - $nbill5 billets de 5 €;
 - $ncoin2 piece de 2 € - $ncoin1 piece de 1 €";

?>
