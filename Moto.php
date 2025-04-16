<?php
include './ReservableInterface.php';
include './Vehicule.php';

class Moto extends Vahicule implements ReservableInterface{

    protected $cylindree;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible, $capaciteTonnage){
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible);
        $this->cylindree = $cylindree;
    }

    public function getType(){
        return "Moto";
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id."la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation." son cylendre est: ".$this->cylindree;
    }
}