<?php
require 'Personnages.php';

$heros = new Personnages("Meni", 200, 15);

$ennemi1 = new Personnages("Minion", 10, 10);

$ennemi2 = new Personnages("Lieutenant", 30, 30);

$ennemi3 = new Personnages("Chef Minion", 100, 100);

$armor = 20;





$randomatk = rand(0,6);

if ($randomatk === 6) {
    
    $heros->armor($ennemi2, $armor); 
    echo "Votre armor a limité les dégats !";
    var_dump($heros->getLife());
    
} else {
    echo "L'atk de " . $ennemi2->getName() . " n'a pas fonctionné !";
    var_dump($heros->getLife());
}

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
            
            height: 100vh;
            background: no-repeat url('images/background.jpg') center/cover;
        }

        .personnages {
            display: flex;
            justify-content: center;
            align-items: end;
            height: 80%;
        }


        img {
            width: 50%;
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

    <button type="submit">atkR</button>
</body>
</html>