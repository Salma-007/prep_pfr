<?php
include './Personne.php';
include './Reservation.php';

class Client extends Personne{
    protected $numeroClient;
    protected $reservations;

    public function __construct($nom, $prenom, $email,$numeroClient, $reservations){
        parent::__construct($nom, $prenom, $email);
        $this->numeroClient = $numeroClient;
        $this->reservations = $reservations;
    }

    public function ajouterReservation(Reservation $r){
       $this->reservations += $r;           
    }

    public function afficherProfil(){
        return "le nom est : ".$this->nom." prenom est : ".$this->prenom." email est: ".$this->email;
    }

    public function getHistorique(){
        
    }
}