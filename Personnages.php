<?php
// nom de class avec majuscule
class Personnages {

    public $nom;
    public $vie;
    public $attaque;
    

   public function __construct($nom, $vie, $attaque)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
    }

    public function ajoutVie() {
        return $this->vie += 50;
    }

    public function armure() {
        return $this->vie += 20;
    }

    public function getAttaque (){
        return $this->attaque ;    
        
    }


}