<?php

// Import des classes
require_once './class/ProduitPhysique.php';
require_once './class/ProduitVirtuel.php';

$livre1 = new ProduitPhysique('Frigiel et fluffy Tome 1', 24.50, 3);
echo $livre1->getNom();
echo '<br>';
echo $livre1->getPrix();
echo '<br>';
echo $livre1->CalculerPrixFinal();
echo '<br>';
echo $livre1->getPoids();

echo '<br>';
echo '<br>';

$livre1Virtuel = new ProduitVirtuel('Frigiel et fluffy Tome 1', 24.50, "/download/F&F_Tome1");
echo $livre1Virtuel->getNom();
echo '<br>';
echo $livre1Virtuel->getPrix();
echo '<br>';
echo $livre1Virtuel->CalculerPrixFinal();
echo '<br>';
echo $livre1Virtuel->getFichier();
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
    </main>
    <footer></footer>
</body>
</html>