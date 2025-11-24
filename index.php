<?php

// Import des classes
require_once './class/Produit.php';
require_once './class/CompteBanquaire.php';
 
// Création d'un objet de type 'Produit'
$livre1 = new Produit('Frigiel et fluffy 1', null, 200, 24);
$livre2 = new Produit('Frigiel et fluffy 2', null, 300, 24);

$CompteBanquaire1 = new CompteBanquaire('Enzo', -25500);

echo '<p>' . $CompteBanquaire1->getTitulaire() . '</p>';
echo '<p>' . $CompteBanquaire1->getSolde() . '</p>';

$CompteBanquaire1->crediter(8000);

echo '<p>' . $CompteBanquaire1->getTitulaire() . '</p>';
echo '<p>' . $CompteBanquaire1->getSolde() . '</p>';

$CompteBanquaire1->debiter(200);

echo '<p>' . $CompteBanquaire1->getTitulaire() . '</p>';
echo '<p>' . $CompteBanquaire1->getSolde() . '</p>';


echo Produit::TVA;
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
                echo '<p>' . $livre1->getTTC() . '</p>';
                echo '<p>' . $livre1->getTVAmontant() . '</p>';
            ?>
        </div>
        <div>
            <?php 
                echo '<p>' . $livre2->getNom() . '</p>';
                echo '<p>' . $livre2->getQuantite() . '</p>';
                echo '<p>' . $livre2->getPrix() . '</p>';
                echo '<p>' . $livre2->getTTC() . '</p>';
                echo '<p>' . $livre2->getTVAmontant() . '</p>';
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>