<?php
//require 'personnage.php';
//require 'archer.php';
namespace Tutoriel2;
require 'class/Autoloader.php';
Autoloader::register();


$merlin = new Personnage('Merlin', 'ML', '1000');
$harry = new Personnage('Harry Potter', 'HP', '25');

$merlin->regenerer();
$merlin->attaque($harry);


$arrow = new Archer('oliver', 'QUEEN', '31');
$arrow->attaque($harry);



// private :
echo $harry->getNom();
echo $harry->getVie();

// pour changer nom personnage (setNom)
$merlin->setNom('Merlin L\'enchanteur');


echo '<pre>';
var_dump($harry, $merlin,$arrow);
echo '</pre>';



if ($harry->mort()) {
    echo 'harry est mort';
}else {
    
    echo 'harry vivant avec ' . $harry->getVie() .' de vie';
}