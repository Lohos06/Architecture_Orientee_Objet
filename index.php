<?php

// Import de la class Produit
require_once './class/Produit.php';
 
// Création d'un objet de type 'Produit'
$livre1 = new Produit('Frigiel et fluffy 1', null, 200, 24);
$livre2 = new Produit('Frigiel et fluffy 2', null, 300, 24);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/style.css">

    <meta name="description" content="Liste de prduits a vendre">
    <title>Page d'accueil</title>
</head>
<body>
    <header></header>
    <main>
        <h1>Architecure Orientée Objet : Produits a vendre</h1>

        <div>
            <?php 
                echo '<p>' . $livre1->getNom() . '</p>';
                echo '<p>' . $livre1->getQuantite() . '</p>';
                echo '<p>' . $livre1->getPrix() . '</p>';
            ?>
        </div>
        <div>
            <?php 
                echo '<p>' . $livre2->getNom() . '</p>';
                echo '<p>' . $livre2->getQuantite() . '</p>';
                echo '<p>' . $livre2->getPrix() . '</p>';
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>