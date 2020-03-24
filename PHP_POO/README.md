## la visibilité prublic / private

- public : 
- private : la variable sera accessible depuis l'intérieur de la classe mais pas en dehors
- protected : c'est équivaut a private, mais on peux y acceder depuis des classe qui hérite de la class

pourquoi ne pas définir en public ? :
    - par défaut toute les variables sont en private
    - Si on a besoins de les utilisée on utilise des getter et setter
    
Get : 
  - private $blabla
  - return $this->blabla;
  - page que l'on souhaite ,$this->blabla();

Set :
- Si plutart on souhaite faire des changements
- Qui font la chose inverse des get
```php
  public function setNom($nom){
        $this->nom = nom
  }
```  
- $variable->setNom('Merlin L'enchanteur);


## Propriétés et Methodes Statiques : 
la class Text en elle même va avoir cette methode 
```php
Text::withZero(10);
``` 

Si on met private une methode static, on n'a plus accès, 

```php
public static function publicwithZero($chiffre){
       return Text::withZero($chiffre);
}

Text::publicwithZero(10)
```

selft:: fait référence a la classe. Ce qui permet de ne pas réecrire tout le code

## constante
Une constante ne change pas a après au fur et a mesure du temps.
C'est utile dans certain cas : 
- design pattern
- pour organiser des fonctions

exemple : 

```php
class Text{
    const SUFFIX = " $";
}
return '0' . $chiffre . self::SUFFIX;
```

## Héritage : 
c'est ce qui va nous permettrent de garder une organisation optimal de notre code et qui va également nous eviter les répétitions. 

## l'autoloading : 

On conseille toujours de séparer les classes dans différents fichiers. Heureusement l'autoloading nous permet de reméditer à ce problème en incluant les classes dès que l'on en a besoin. 

## les namespaces :
Les namespaces permettent de définir un nom de package que l'on pourra ensuite charger de manière automatique gràce à un autoloading. Par exemple, nous allons placer notre class Form dans un namespace class
Cela permet aussi d'organiser correctement sont code et d'éviter les conflits.

## Tp architecture :
- dossier app : toutes les classes
- public : tout les fichiers public 
- css 
- js