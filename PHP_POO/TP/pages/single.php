<?php
use App\App;
use App\Table\Categorie;
use App\Table\Article;

$post = Article::find($_GET['id']);
if ($post === false){
    App::notFound();
}
// $categorie = Categorie::find($post->categorie_id);
// $post = App::getDb()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

// changer le nom du titre d'un article
App::setTitle($post->titre);
?>

<h2><?= $post->titre; ?></h2>
<p><em><?= $post->categorie; ?> </em></p>
<p><?= $post->contenu; ?></p>

