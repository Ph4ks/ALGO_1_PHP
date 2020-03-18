<?php

class identity{
    public $nom;
    public $prenom;
    public $datedn;

    function __construct($nnom,$nprenom,$ndatedn){
        $this->nom = $nnom;
        $this->prenom = $nprenom;
        $this->datedn = $ndatedn;
               
}
    function afficheperson(){
        $age= $this->calculAge();
        echo "$this->prenom $this->nom a $age->y ans.";
}   
    
    function calculAge(){
        $today = new DateTime(date("D M d"));
        $date = new DateTime($this->datedn);
        $age = $date->diff($today);

        return $age;

    }
}


$p1 = new identity ("DUPON","MICHEL","1980-02-19");
$p1 ->afficheperson();

?>
