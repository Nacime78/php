<?php
session_start();
$_SESSION['pseudo'] = "Killua78";
$_SESSION['email'] = "killua78@gmail.com";
$_SESSION['statut'] = "administrateur";
$_SESSION['adresse'] = "3 avenue stalingrad";
$_SESSION['numéro'] = "06 37 49 57 14"; 
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
    <button><a href="profil.php">Consulter les données de session</a></button>
</body>
</html>