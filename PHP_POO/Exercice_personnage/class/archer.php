<?php 
// on met le parent personnage
namespace  Tutoriel2;
class Archer extends Personnage{

    protected $vie = 40;

    public function __construct($nom, $initial, $age){
        // permet de diviser la vie en deux pour les archer
        $this->vie = $this->vie /2;
        parent::__construct($nom, $initial, $age);
      
    }

    public function attaque($cible){
        $cible->vie = 2 * $this->attaque;
        parent::attaque($cible);
    }
    
}