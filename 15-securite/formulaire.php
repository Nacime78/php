<?php

// un if($_POST) obligatoire en début de traitement PHP pour dire que les contraintes que les contraintes que l'on va y coder ne devront être appliquées que si une donnée a été envoyée dans le formulaire... sinon, pas besoin d'agir
$erreur1 = '';
$erreur2 = '';
$erreur3 = '';
$erreur4 = '';

if($_POST){
    // pour mettre des contraintes à un formulaire, il faut le faire pour chaque input particulier et pas pour tout le form en général
    if(!isset($_POST['pseudo']) || !preg_match('#^[a-zA-Z0-9-_.]{3,20}$#', $_POST['pseudo'])){
        $erreur1 .= "<div><mark>Erreur format pseudo</mark></div>";
    }
    // contrôle du champ prénom. Doit exister (!isset). doit être renseigné avec des lettres (is_numeric) et doit être compris entre 3 et 20 caractères ... sinon erreur
    if(!isset($_POST['prenom'])  || iconv_strlen($_POST['prenom']) < 3 || iconv_strlen($_POST['prenom']) > 20 || is_numeric($_POST['prenom'])){
        $erreur2 .= "<div><mark>Erreur format prénom</mark></div>";
    }

    // contrôle d'un champ qui doit recevoir un email
    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erreur3 .= "<div><mark>Erreur format email</mark></div>";
    }

    // if(!isset($_POST['code_postal']) || !preg_match("#^[0-9]{5}$#", $_POST['code_postal'])){
    //     $erreur4 .= "<div><mark>Erreur format code postal</mark></div>";
    // }

    // second exemple de contrôle de champs postal avec ctype-digit
    if(!isset($_POST['code_postal']) || !ctype_digit($_POST['code_postal']) || strlen($_POST['code_postal']) != 5){
        $erreur4 .= "<div><mark>Erreur format code postal</mark></div>";
    }
}

?>
<form method="POST" action="">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" max-length="20" required>
    <br><?= $erreur1; ?><br>
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom">
    <br><?= $erreur2; ?><br>
    <label for="email">Email</label>
    <input type="mail" id="email" name="email" placeholder="Votre email">
    <br><?= $erreur3; ?><br>
    <label for="code_postal">Code postal</label>
    <input type="text" id="code_postal" name="code_postal" placeholder="Votre code postal">
    <br><?= $erreur4; ?><br>
    <input type="submit" value="Envoyer">
</form>