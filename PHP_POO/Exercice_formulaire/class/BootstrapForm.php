<?php 
namespace Tutoriel;

class BootstrapForm extends \Tutoriel\Form{

    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    } 

    public function input($name){
        return $this->surround(
        '<label>' . $name. '</label><input type="text" name=".$name." value="'.$this->getvalue($name).'" class="form-control">'
         );
    }

    public function submit(){
        return '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }
}