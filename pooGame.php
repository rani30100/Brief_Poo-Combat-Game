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
     $this->vie;
 
}
public function getAtk(){
    return $this->atk;
}

function lifeBonus(){
    return $this->vie +=50;
}

function armorBonus(){
    return $this->armor +=0;
}

function death (){
    if ($this->vie <=0){
    echo "tu es mort ";
}
}


public function atk($cible){
    $cible->vie -= $this->getAtk();
    if ($cible->vie <=0 ){
        echo "le méchant est mort";
    } else {
    echo "le méchant à survecu";
    };



    
}












}