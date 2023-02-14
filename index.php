<?php
require 'Personnages.php';

$heros = new Personnages("Mehdi", 200, 15);

$ennemi1 = new Personnages("Minion", 10, 10);

$ennemi2 = new Personnages("Lieutenant", 30, 30);

$ennemi3 = new Personnages("Chef Minion", 100, 100);

$ennemis = [$ennemi1, $ennemi2, $ennemi3];

foreach($ennemis as $ennemi) {
    $heros->attaque($ennemi);
}

if ($heros->mort()) {
    echo "Vous êtes mort !";
}


// $heros->attaque($ennemi1);
// $heros->attaque($ennemi2);
// $heros->attaque($ennemi3);
// $ennemi1->attaque($heros);
// $ennemi2->attaque($heros);
// $ennemi3->attaque($heros);

// echo '$' . 'ennemi' . 1 ;

var_dump($ennemi3->getVie());

// $heros->mort();