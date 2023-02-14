<?php

class Personnages{
    private $name;
    private $vie ;
    private $atk ;
    private $armor =20;




public function __construct($name,$vie,$atk){
    $this->name=$name;
    $this->vie=$vie;
    $this->atk=$atk;
}

public function getName(){
    return $this->name;
}
public function getLife(){
    return $this->vie;
 
}
public function getAtk(){
    return $this->atk;
}

function lifeBonus(){
    return $this->vie +=50;
}


function death (){
    if ($cible->vie <=0 ){
        echo "le méchant est mort";
    } else {
    echo "le méchant à survecu";
    }
}



public function atk($cible){
    $cible->vie -= $this->getAtk();
   
}

public function armor ($cible,$armor){
    $this->vie -= ($cible->getAtk() - $armor);
}




}








