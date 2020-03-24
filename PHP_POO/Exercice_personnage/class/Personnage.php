<?php
// class personnage
namespace Tutoriel2;

class Personnage{

    const MAX_VIE = 100; // protected static $max_vie = 100
    
    // propriété 
    /**
     * public : accessible depuis dehors
     * protected : accessible depuis l'interieur de la classe mais pas en dehors
     * protected : equivalent a protected 
     */
    protected $vie = 80;
    protected $attaque = 20;
    protected $nom;
    protected $initial;
    protected $age;
    
    // function
    public function __construct($nom, $initial, $age){
        $this->nom = $nom;
        $this->initial = $initial;
        $this->age = $age;
    }
    // quand la propriété est en prive
    public function getNom(){
        return $this->nom;
    }

    public function getvie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }

    // 
    public function setNom($nom){
        $this->nom = $nom;
    }



    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = self::MAX_VIE;
        }else{
            $this->vie += $vie;
        }
    }
    
    public function mort(){
        return $this->vie <= 0;
       
    }

    protected function empecher_negatif(){
        if($this->vie <= 0){
            $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->attaque;
        $cible->empecher_negatif();
    }



}