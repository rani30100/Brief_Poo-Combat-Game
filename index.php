<?php
require 'Personnages.php';

$heros = new Personnages("Mehdi", 200, 15);

$ennemi1 = new Personnages("Minion", 10, 10);

$ennemi2 = new Personnages("Lieutenant", 30, 30);

$ennemi3 = new Personnages("Chef Minion", 100, 100);

var_dump($heros->ajoutVie());
var_dump($heros->armure());
var_dump($heros->getattaque());