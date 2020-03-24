<?php 

use \Tutoriel\Autoloader;
use \Tutoriel\BootstrapForm;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice formulaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    


<?php
require 'class/Autoloader.php';
//Autoloader::register();
//pour apeler le namespace 
Autoloader::register();
$form = new BootstrapForm($_POST);

// var_dump(Text::publicwithZero(20));
?>
<form action="#" method="post">
    <?php 
    echo $form->input('username');
    echo $form->input('password');


    echo $form->submit();
    ?>
</form>
<!-- affiche la date du jour-->
<h1><?= $form->Date()->format('d-m-Y');?></h1>
<?php


// echo '<pre>';
// var_dump();

// echo '</pre>';

?>

</body>
</html>

