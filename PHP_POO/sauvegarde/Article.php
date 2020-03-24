<?php

namespace App\Table;

use App\App;

class Article extends Table
{
    protected static $table = 'articles';


    public static function find($id)
    {
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre
          as categorie
        FROM articles
        LEFT JOIN categories ON categorie_id = categories.id
        WHERE articles.id = ?
        ", [$id], true);
    }

    /**
     * Pour récuperer les derniers articles, avec l'affichage de la categorie
     */
    public static function getLast()
    {
        return self::query("
    SELECT articles.id, articles.titre, articles.contenu, categories.titre 
        as categorie  
    FROM articles 
    LEFT JOIN categories ON categorie_id = categories.id
    ORDER BY articles.date DESC 
    ");
    }

    public static function LastByCategory($categorie_id)
    {
        return self::query("
    SELECT articles.id, articles.titre, articles.contenu, categories.titre 
        as categorie  
    FROM articles 
    LEFT JOIN categories 
        ON categorie_id = categories.id
    WHERE categorie_id = ?
    ORDER BY articles.date DESC 
        ", [$categorie_id]);

    }

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getURL()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->contenu, 0, 50) . '</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
}