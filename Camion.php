<?php
include './ReservableInterface.php';

class Camion implements ReservableInterface{

    protected $capaciteTonnage;

    public function getType(){
        return "Camion";
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id."la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation." son capacité de  tonnage est: ".$this->capaciteTonnage;
    }
}