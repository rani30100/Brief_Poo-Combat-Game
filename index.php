<?php
require 'Personnages.php';

$heros = new Personnages ("Meni",200,15);

$ennemi1 = new Personnages ("Minion",10,10);

$ennemi2 = new Personnages ("Lieutenant",30,30);

$ennemi3 = new Personnages ("Chef Minion",100,100);

$armor = 20;

// Déterminer l'occurrence d'attaque pour chaque ennemies
$randomEnnemi1 = rand (0,2);
$randomEnnemi2 = rand (0,4);
$randomEnnemi3 = rand (0,6);

if ($randomEnnemi1 === 0 ) {
    
    $heros->armor($ennemi2, $armor); 
    echo "Votre armor a limité les dégats !";
    var_dump($heros->getLife());
    
} else {
    echo "L'atk de " . $ennemi2->getName() . " n'a pas fonctionné !";
    var_dump($heros->getLife());
}

if ($randomEnnemi2 === 1 ){
    $heros->armor($ennemi2, $armor); 
    echo "Votre armor a limité les dégats !";
    var_dump($heros->getLife());
    
} else {
    echo "L'atk de " . $ennemi2->getName() . " n'a pas fonctionné !";
    var_dump($heros->getLife());
}

if ($randomEnnemi3){
    $heros->armor($ennemi2, $armor); 
    echo "Votre armor a limité les dégats !";
    var_dump($heros->getLife());
    
} else {
    echo "L'atk de " . $ennemi2->getName() . " n'a pas fonctionné !";
    var_dump($heros->getLife());
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
            justify-content: center;
            align-items: end;
            height: 80%;
            width: 100%;
        }


        img {
            width: 50%;
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
    <section class="personnages">
    <div class="minion"><img src="images/minion.png" alt="" ></div>
    <div class="heros"><img src="images/heros.png" alt="" ></div>
    <div class="lieutenant"><img src="images/lieutenant.png" alt="" ></div>
    <div class="chefminion"><img src="images/chefminion.png" alt="" ></div>
    </section>

    <button type="submit">ATTAQUER</button>
</body>
</html>