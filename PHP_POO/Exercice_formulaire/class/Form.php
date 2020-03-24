<?php 

// les namespaces
namespace Tutoriel;

/**
 * Class Form
 * Permet de crée un formulaire rapidement et simplement
 */
class Form{
    // propriété

    /**
     * @var array Donnée utilisées par le formulaire
     */
    protected $data;

    /**
     * @var string Tag utilisé pour entourer les champs 
     */
    public $surround = 'p';

    /**
     * @param array $data Donnée utilisées par le formulaire
     */
    public function __construct($data){
        $this->data = $data;
    }

    /**
     * @param $html string code HTML entouré
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    } 

    /**
     * @param $index string  l'index de la valeur a recuperer
     * @return string
     */
    protected function getvalue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name){
       return $this->surround('
       <input type="text" name=".$name." value="'.$this->getvalue($name).'">'
        );
    }
    
    /**
     * @param $name string
     * @return string
     */
    public function submit(){
       return $this->surround('<button type="submit">Envoyer</button>');
    }

    public function Date(){
        // il faut dire que le date time es a la racine \
       return new \DateTime();
    }


}