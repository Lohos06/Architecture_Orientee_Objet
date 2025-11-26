<?php

require './vendor/autoload.php';
require_once './class/Bdd.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$bdd = new Bdd();


require_once './class/Categorie.php';
 
$sql = 'SELECT * FROM categorie';
$resultat = $bdd->prepareExecute($sql);
$categories = $resultat->fetchAll(PDO::FETCH_CLASS, 'Categorie');
 
foreach ($categories as $categorie) {
  echo '<h2>'. $categorie->getNom() .'</h2>';
  echo '<p>'. $categorie->getDescription() .'</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>