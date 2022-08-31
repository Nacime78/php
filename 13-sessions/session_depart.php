<!-- une session sert a conserver des informations temporairer. On ouvre une session pour un papier car l'utilisateur a mis un produit dans son panier. Mais on n'envoie pas cette même information en BDD, car elle n'est pas définitive. Peut-être va t-il supprimer ce produit de son panier, en ajouter un deuxième etc...  -->
<!-- Tant que l'information stokée est -->
<?php
// pour qu'une session puisse être débutée et que l'on puisse récuper ses infomatiob, il faut declarer en haut du fichier, avant toute chose  (doctype etc...) un session_start
session_start();
$_SESSION['prénom'] = "Kazuto";
$_SESSION['statut'] = "utilisateur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="session_arrivee.php">Aller ver le profil</a></button>
</body>
</html>