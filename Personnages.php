<?php
// name de class avec majuscule
class Personnages {

    private $name;
    private $life;
    private $atk;
    public $armor = 20;
    
    // méthodes pour aller chercher les variables mises en privées 
    public function getName (){
        return $this->name ;    
        
    }
    public function getLife (){
        return $this->life ;    
        
    }
    public function getAtk (){
        return $this->atk ;    
        
    }

   public function __construct($name, $life, $atk)
    {
        $this->name = $name;
        $this->life = $life;
        $this->atk = $atk;
    }

    // méthodes liées aux bonus 
    public function lifeBonus() {
        return $this->life += 50;
    }

    public function armor($cible, $armor) {
        $this->life -= ($cible->getAtk() - $armor);
    }

    // méthodes liées aux intéractions entre personnages
    public function atk($cible) {
        $cible->life -= $this->getAtk();
    }

    public function death() {
        return $this->life <= 0;
    }

}