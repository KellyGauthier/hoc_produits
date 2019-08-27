<?php require_once 'layout/header.php'; ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="produits_corrige.php">Produits</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <?php if (
            array_key_exists('userLogin', $_SESSION) &&
            $_SESSION['userLogin'] !== null
        ) { ?>
        <li class="nav-item">
            <a class="nav-link" href="deconnexion.php">Déconnection</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connection</a>
        </li>
        <?php } ?>
    </ul>
</nav>

<div class="home">
    <div class="greet">
        <h1>Bienvenue</h1>

    </div>
</div>

<div>
    <a href="theme.php" class="btn btn-secondary" role="button">Thème de couleur</a>
</div>

<?php require_once 'layout/footer.php'; ?>