<?php require_once 'layout/header.php'; ?>

<?php
if (empty($_POST)) {
  //  exit ("Merci de remplir le formulaire de contact");
  header('Location: index.php');
  die();
}

if (array_key_exists('infos', $_FILES)) {
  $tmp_name = $_FILES['infos']['tmp_name'];
  $filename = $_FILES['infos']['name'];
  $upload_folder = $_SERVER['DOCUMENT_ROOT'] . '/HOC2019/uploads/';

  // $_SERVER['DOCUMENT_ROOT]/

  if (
    is_uploaded_file($tmp_name) &&
    move_uploaded_file(
      $tmp_name,
      $upload_folder . $filename)) {
        echo "Votre fichier a bien été enregistré.";
  }
}


echo "Merci pour votre demande, " . $_POST["nom"] . " " . $_POST["prenom"];
?>
<div>
<a href="index.php" class="btn btn-info" role="button">Retour à la page d'accueil</a>
</div>