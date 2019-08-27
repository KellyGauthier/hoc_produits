<?php require_once 'layout/header.php'; ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link" href="index.php">Page d'accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
    </ul>
</nav>

<h1 class="produit_h1">Liste des libellés produits</h1>
<?php
require_once 'data/produits/data_libelles.php';
require_once 'templates/produits/libelles_produits.php';
?>


<h1 class="produit_h1">Liste des produits</h1>
<?php
require_once 'data/produits/data_liste.php';
require_once 'templates\produits\liste_produits.php';
?>


<?php require_once 'layout/footer.php'; ?>