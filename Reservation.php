<?php
include './Vehicule.php';
include './LoggerTrait.php';

class Reservation{
    protected Vehicule $vehicule;
    protected $client;
    protected $dateDebut;
    protected $nbJours;
    protected $statut;

    public function calculerMontant(){
        return "le prix est: ".$this->nbJours*$this->vehicule->prixJour;
    }

    public function confirmer(){
        $this->status = "done";
        $this->logAction("reservation confirmée");
    }

    public function annuler(){
        $this->status = "annulé";
        $this->logAction("reservation annulée");
    }
}

