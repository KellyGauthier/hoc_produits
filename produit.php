<?php
require_once 'src/Utils.php';
require_once 'src/produits_functions.php';
require_once 'layout/header.php';
require_once 'data/produits/data_liste.php';

// Si la clé "id" n'existe pas, on redirige vers la page d'accueil
if (!array_key_exists('id', $_GET)) {
    Utils::redirect('index.php');
}

$id = $_GET['id'];

$produit = search_produit($id, $produits);

if ($produit === null) {
    exit("Ce produit n'existe pas");
}

require_once 'templates/produits/produit_item.php'; 

require_once 'layout/footer.php';
?>