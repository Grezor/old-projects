<?php


$categorie = App\Table\Categorie::find($_GET['id']);
$article = \App\Table\Article::LastByCategory($_GET['id']);
$categories = \App\Table\Categorie::all();
if ($categorie === false){
    App::notFound();
}
?>
<h1><?= $categorie->titre; ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php

        use App\App;
        use App\Table\Categorie;
        use App\Table\Article;

        foreach ($article as $post): ?>

            <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">

        <?php foreach (Categorie::all() as $categorie): ?>
            <ul><li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>    </ul>
        <?php endforeach; ?>

    </div>
</div>

