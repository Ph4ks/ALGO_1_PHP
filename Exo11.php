<?php

$cars = array("Peugeot","Renault","BMW","Mercedes");
$arrlenght = count ($cars);
echo "Il y a $arrlenght ";
echo "marques de voitures dans le tableau:<br>";
    for ($x=0; $x < $arrlenght ; $x++) { 
        echo "<li>$cars[$x]</li>";
      
       

}
?>
