<?php
require 'Personnages.php';

$heros = new Personnages ("Meni",200,15);

$ennemi1 = new Personnages ("Minion",10,10);

$ennemi2 = new Personnages ("Lieutenant",30,30);

$ennemi3 = new Personnages ("Chef Minion",100,100);

$armor = 20;

// Déterminer l'occurrence d'attaque pour chaque ennemies
$randomHeros = rand(0,1);
$randomEnnemi1 = rand (0,2);
$randomEnnemi2 = rand (0,4);
$randomEnnemi3 = rand (0,6);

$ennemis = [$ennemi1, $ennemi2, $ennemi3];
$randomEnnemi = rand(0,2);

if ($randomHeros === 0 ) {
    $heros->atk($ennemis[$randomEnnemi]);
    var_dump($heros->getLife());
}

if ($randomEnnemi1 === 1 ) {
    
    $heros->armor($ennemi1, $armor); 
    echo "Votre armure a limité les dégats !";
    
    
} else {
    echo "L'attaque de " . $ennemi1->getName() . " n'a pas fonctionné !";
    
}

if ($randomEnnemi2 === 3 ){
    $heros->armor($ennemi2, $armor); 
    echo "Votre armure a limité les dégats !";
    
    
} else {
    echo "L'attaque de " . $ennemi2->getName() . " n'a pas fonctionné !";
    
}

if ($randomEnnemi3 === 5){
    $heros->armor($ennemi3, $armor); 
    echo "Votre armure a limité les dégats !";
    
    
} else {
    echo "L'attaque de " . $ennemi3->getName() . " n'a pas fonctionné !";
    
}

// condition si le heros meurt 
if ($heros->death()) {
    echo "Vous êtes mort !";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="lifewport" content="width=device-width, initial-scale=1.0">
    <title>Combat Game</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background: no-repeat url('images/background.jpg') center/cover;
        }

        .personnages {
            display: flex;
            justify-content: space-around;
            align-items: end;
            height: 70%;
            width: 100%;
        }


        img {
            width: 40%;
        }

        button {
            margin-top: 40px;
            width: 20%;
            height: 30px;
            font-size: larger;
            font-weight: bold;
            border-radius: 15px;
            background-color: red;
        }
    </style>
</head>
<body>
    <button type="submit">ATTAQUER</button>
    <section class="personnages">
    <div class="minion"><img src="images/minion.png" alt="" ></div>
    <div class="heros"><img src="images/heros.png" alt="" ></div>
    <div class="lieutenant"><img src="images/lieutenant.png" alt="" ></div>
    <div class="chefminion"><img src="images/chefminion.png" alt="" ></div>
    </section>

</body>
</html>