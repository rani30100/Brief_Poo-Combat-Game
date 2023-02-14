<?php
require 'pooGame.php';

$heros = new Personnages ("Rani",0,15);
$ennemie1 = new Personnages ("minion",10,10);
$ennemie2 = new Personnages ("lieutenant minion",30,30);
$ennemie3 = new Personnages ("chef minion",100,100);


// var_dump($heros->name);
// var_dump($heros->lifeBonus());
// var_dump($heros->armorBonus());

$randomHeros = rand (0,5);

if ($randomHeros === 0 ){
    $heros->atk($ennemie1);
}else{
echo "L'attaque à échoué !";
}

var_dump($ennemie1->getLife());