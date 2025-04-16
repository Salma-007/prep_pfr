<?php


abstract class Vehicule{

    protected $id;
    protected $immatriculation;
    protected $marque;
    protected $modele;
    protected $prixJour;
    protected $disponible;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJours, $disponible){
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJours = $prixJours;
        $this->disponible = $disponible;
    }

    public function afficherDetails(){
        return "l'id du véhicule est: ".$this->id." la marque est: ".$this->marque." son modele est: ".$this->modele." son immatriculation est: ".$this->immatriculation;
    }

    public function calculerPrix(int $jours){
        
        return "le prix est: ".$this->prixJour*$jours;
    }

    public function estDisponible(){
        if($this->disponible){
            return true;
        }
        else{
            return false;
        }
    }

    public abstract function getType();

}