<?php
include './Agence.php';
include './Vehicule.php';
include './Moto.php';
include './Client.php';

$paris = new Agence('Paris Agency', 'Paris');
$casa = new Agence('Casa Agency', 'Casa');

$voiture1 = new Voiture('123456', 'AB500', 'ford', '2020', 50.00, 1, 4, 'manuelle');
$voiture2 = new Voiture('128856', 'CD700', 'toyota', '2022', 70.00, 1, 4, 'auto');

$moto1 = new Moto('128856', 'CD700', 'toyota', '2022', 70.00, 1, 12);
$moto2 = new Moto('918856', 'KL700', 'bmw', '2023', 65.00, 0, 15);

$paris->ajouterVehicule($voiture1);
$casa->ajouterVehicule($voiture2);

$paris->ajouterVehicule($moto1);
$casa->ajouterVehicule($moto2);

$client1 = new Client();

