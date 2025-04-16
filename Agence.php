<?php
include './Client.php';
include './Vehicule.php';
include './LoggerTrait.php';

class Agence{

    use LoggerTrait;

    protected $nom;
    protected $ville;
    protected $vehicules;
    protected $clients;
    protected $i;

    public function __construct($nom, $ville, $vehicules = [], $clients = []){
        $this->nom = $nom;
        $this->ville = $ville;
        $this->vehicules = $vehicules;
        $this->clients = $clients;
    }

    public function ajouterVehicule(Vehicule $v){
        $this->vehicules += $v;
    }

    public function rechercherVehiculeDisponible(string $type){

        for( $i=0; $i< $this->vehicules.len(); $i++){
            if($type === $this->vehicule[i]->getType()){
                $this->logAction("vehicule disponible!");
                return true;
            }
            else{
                $this->logAction("vehicule indisponible.");
                return false;
            }
        }

        return false;
    }

    public function enregistrerClient(Client $c){
        $this->clients += $c;
        $this->logAction("client bien enregistré");
    }

    public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours){
        
    }
}
