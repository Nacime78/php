<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?= $_SESSION['prénom'] ?></title>
</head>
<body>
<?php  if(isset($_SESSION)): ?>
    <h1>Bienvenue <?= $_SESSION['pseudo'] ?></h1>
    <!-- ternaire pour modifier l'affichage selon que la personne qui se connecte a le statut d'administrateur ou non -->
    <p>Sur ce site, vous avez le satut d'<?= ($_SESSION['statut'] == "administrateur") ? $_SESSION['statut'] . ', bienvenue' : $_SESSION['statut'] ?>.</p>
    <p>Votre mail est <?= $_SESSION['email'] ?>.</p>
    <p>Votre adresse est <?= $_SESSION['adresse'] ?>.</p>
    <p>Et votre numéro de téléphone est <?= $_SESSION['numéro'] ?>.</p>
<?php endif;  ?>
</body>
</html>