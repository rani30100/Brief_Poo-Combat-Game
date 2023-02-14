<?php

class Personnages{
    private $name;
    private $life ;
    private $atk ;
    private $armor =20;




public function __construct($name,$life,$atk){
    $this->name=$name;
    $this->life=$life;
    $this->atk=$atk;
}

public function getName(){
    return $this->name;
}
public function getLife(){
    return $this->life;
 
}
public function getAtk(){
    return $this->atk;
}

function lifeBonus(){
    return $this->life +=50;
}


function death (){
    if ($cible->life <=0 ){
        echo "le méchant est mort";
    } else {
    echo "le méchant à survecu";
    }
}



public function atk($cible){
    $cible->life -= $this->getAtk();







   
}

public function armor ($cible,$armor){
    $this->life -= ($cible->getAtk() - $armor);
}




}








