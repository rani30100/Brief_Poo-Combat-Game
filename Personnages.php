<?php
// nom de class avec majuscule
class Personnages {

    private $nom;
    private $vie;
    private $attaque;
    public $armure = 20;
    
    // méthodes pour aller chercher les variables mises en privées 
    public function getNom (){
        return $this->nom ;    
        
    }
    public function getVie (){
        return $this->vie ;    
        
    }
    public function getAttaque (){
        return $this->attaque ;    
        
    }

   public function __construct($nom, $vie, $attaque)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
    }

    // méthodes liées aux bonus 
    public function ajoutVie() {
        return $this->vie += 50;
    }

    public function armure($cible, $armure) {
        $this->vie -= ($cible->getAttaque() - $armure);
    }

    // méthodes liées aux intéractions entre personnages
    public function attaque($cible) {
        $cible->vie -= $this->getAttaque();
    }

    public function mort() {
        return $this->vie <= 0;
    }

}