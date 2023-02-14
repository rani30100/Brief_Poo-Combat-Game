<?php
require 'Personnages.php';

$heros = new Personnages("Mehdi", 200, 15);

$ennemi1 = new Personnages("Minion", 10, 10);

$ennemi2 = new Personnages("Lieutenant", 30, 30);

$ennemi3 = new Personnages("Chef Minion", 100, 100);

$armure =20;

// $ennemis = [$ennemi1, $ennemi2, $ennemi3];

// foreach($ennemis as $ennemi) {
//     $heros->attaque($ennemi);
// }

if ($heros->armure($ennemi2, $armure)) {
    $ennemi2->attaque($heros);
};

var_dump($heros->getVie());

// if ($heros->mort()) {
//     echo "Vous êtes mort !";
// }

// var_dump($ennemi3->getVie());