<?php 
class Text{

    private static $suffix = " €";
    const SUFFIX = " $";

    // Cette methode permet d'apeler une autre function en privé
    // qui elle est static
    public static function publicwithZero($chiffre){
        // self fait référence a la classe
        // return Text::withZero($chiffre);
        return self ::withZero($chiffre);
    }

    public static function withZero($chiffre){
        if ($chiffre < 10) {
            return '0' . $chiffre . self::$suffix;
        }else{
            //return $chiffre . self::$suffix;
            // ou possibiliité de faire 
            return $chiffre . self::SUFFIX;
        }
    }

}