<?php require_once 'layout/header.php'; ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Page d'accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produits_corrige.php">Produits</a>
        </li>
    </ul>
</nav>

<h1 class="contact_h1">Contactez-nous</h1>


<div>
    <form action="contact_process.php" method="POST" enctype="multipart/form-data">
        <p>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" placeholder="Martin"><br>
        </p>

        <p>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" placeholder="Jean"><br>
        </p>

        <p>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="truc@truc.fr"><br>
        </p>

        <p>
            <label for="infos">Fichier d'infomations :</label>
            <input type="file" name="infos" id="infos">

        </p>
        <p>
            <label for="object">Objet :</label>
            <input type="text" name="object" id="objet">
        </p>

        <p>
            <label for="message">Message :</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
        </p>

        <p>
            <input type="submit" value="Envoyer">
        </p>

    </form>
</div>



<?php require_once 'layout/footer.php' ?>