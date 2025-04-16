<?php
include './ReservableInterface.php';
include './Vehicule.php';

class Voiture extends Vehicule implements ReservableInterface{

    protected $nbPortes;
    protected $transmission;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible, $nbPortes, $transmission){
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible);
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }

    public function getType(){
        return "Voiture";
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id."la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation." le nombre de portes est: ".$this->nbPortes;
    }
}