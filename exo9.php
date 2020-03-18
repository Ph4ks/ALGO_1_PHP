<!DOCTYPE>
<html>
<?php

$age = 21;
$gender = 2;

if( $gender = 1 && $age>20) {
    echo "Age : $age <br>";
    echo "Sexe : M <br>";
    echo "La personne est imposable";
}elseif($gender = 2 && $age>= 18 && $age<=35) {
    echo "Age : $age <br>";
    echo "Sexe : F <br>";
    echo "La personne est imposable";
}elseif($age<=20 && $gender=1 || $age<18 && $gender=2 || $age>35 && $gender=2){
    echo "La personne n'est pas imposable";
}
    ?>

