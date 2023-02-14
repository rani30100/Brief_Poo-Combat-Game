<?php
require 'pooGame.php';

$heros = new Personnages ("Meni",200,15);

$ennemi1 = new Personnages ("Minion",10,10);

$ennemi2 = new Personnages ("Lieutenant",30,30);

$ennemi3 = new Personnages ("Chef Minion",100,100);

$armor = 20;

// var_dump($heros->name);
// var_dump($heros->lifeBonus());
// var_dump($heros->armorBonus());

$randomEnnemi1 = rand (0,5);
$randomEnnemi2 = rand (0,2);
$randomEnnemi3 = rand (0,1);

//          Function armor => $heros -= (atkennemi - armorHero)

if ($randomEnnemi1 === 0 ){
   
    $heros->atk($ennemie1);
    var_dump($ennemie1->getLife());
  
}else{
echo "L'ennemie à esquivé !"."<br>";
};


if ($randomEnnemi2 === 1 ){

    $heros->atk($ennemie2);
    var_dump($ennemie2->getLife());
}else{
echo "L'ennemie à esquivé !"."<br>";
};

if ($randomEnnemi3 === 2 ){

    $heros->atk($ennemie3);
    var_dump($ennemie3->getLife());
}else{
echo "L'ennemie à esquivé !"."<br>";
};






if ($heros->armor($ennemie2,$armor)){
    $ennemie2->atk($heros);

}
var_dump($heros->getLife());