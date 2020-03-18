<?php

$note = array(
    "10", "12", "8", "19", "3", "16", "11", "13", "9"
);
$moyenne=array_sum($note)/count($note);
$moyenne=round($moyenne,2);
$list= implode(",",$note);
echo "Les notes obtenues par l'eleve sont :$list";

echo "<br><br> Sa moyenne generale est donc de: $moyenne";
?>
