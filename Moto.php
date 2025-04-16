<?php
include './ReservableInterface.php';

class Moto implements ReservableInterface{

    protected $cylindree;

    public function getType(){
        return "Moto";
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id."la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation." son cylendre est: ".$this->cylindree;
    }
}