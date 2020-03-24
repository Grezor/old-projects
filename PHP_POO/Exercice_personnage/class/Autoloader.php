<?php
// require 'form.php';
// require 'text.php';
// require 'BootstrapForm.php';

namespace Tutoriel2;
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        /**
         * Si la classe commence par tutoriel alors tu lance tout
         */
        if (strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            //     var_dump($class);
            require 'class/' . $class . '.php';
        }

    }

}