<?php

$pu = 9.99;
$q = 5 ;
$tva = 0.2;

    $mdlf=($pu*$q)+($pu*$q*$tva);

    echo "Prix unitaire de l’article : $pu <br />";
    echo "Quantité : $q <br />";
    echo "Taux de TVA : $tva <br />";

echo "Le montant de la fatcure à regler est de: $mdlf €";
?>
