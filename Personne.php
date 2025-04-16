<?php

abstract class Personne{
    
    protected $nom;
    protected $prenom;
    protected $email;

    public function __construct($nom, $prenom, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public abstract function afficherProfil();
}