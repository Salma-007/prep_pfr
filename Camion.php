<?php
include './ReservableInterface.php';
include './Vehicule.php';

class Camion extends Vahicule implements ReservableInterface{

    protected $capaciteTonnage;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible, $capaciteTonnage){
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible);
        $this->capaciteTonnage = $capaciteTonnage;
    }

    public function getType(){
        return "Camion";
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id."la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation." son capacité de  tonnage est: ".$this->capaciteTonnage;
    }
}