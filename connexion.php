<?php require_once 'layout/header.php'; ?>
<?php require_once 'src/utils.php'; ?>
<?php require_once 'src/users_functions.php'; ?>

<?php
// Initialisation de la variable contenant le message d'erreur
$error = false;
// Vérification : si le tableau superglobal $_POST n'est pas vide,
// alors cela signifie que j'ai une requête de type POST sur cette page
// Cela ne veut pas forcément dire que cette requête vient de mon formulaire d'authentification, donc je vais ajouter à ma condition la vérification de l'existence des clés "username" et "password"
if (
    !empty($_POST) &&
    array_key_exists('username', $_POST) &&
    array_key_exists('password', $_POST)
) {
    $login = $_POST['username'];
    $pass = $_POST['password'];

    $_SESSION['userLogin'] = authenticate($login, $pass);
    if ($_SESSION['userLogin'] !== null) {
        redirect('index.php');
    } else {
        $error = true;
    }
}
?>

<h1>Connexion</h1>

<form method="POST" class="form-group">
    <?php if ($error) { ?>
    <p style="color: red; font-weight: bold;">
        Les informations fournies n'ont pas permis de vous identifier
    </p>
    <?php } ?>
    <p>
        <label for="username">Login</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Login...">
    </p>

    <p>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe...">
    </p>

    <p>
        <input type="submit" class="btn btn-primary" value="Connexion">
    </p>
</form>

<?php require_once 'layout/footer.php'; ?>