<?php

// Import des classes
require_once './class/Developper.php';
require_once './class/Designer.php';
require_once './class/Entreprise.php';

$dev1 = new Developper(2000);
echo $dev1->travailler();
echo $dev1->getSalaire();

$des1 = new Designer(1000);
echo $des1->travailler();
echo $des1->getSalaire();

$entreprise = new Entreprise();
$entreprise->addEmployer($dev1);
$entreprise->addEmployer($des1);

echo $entreprise->getMasseSalariale();

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