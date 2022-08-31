<?php

// La méthode GET (superglobale) peremt de véhiculer des informations dans l'URL pour récupérer sur un autre fichier (ou à un autre endroit du même fichier) pour avoir un affichage spécial

if(!$_GET){
    echo "<button><a href='?produit=Gateau&variete=fraise&prix=12'>Tester</a></button>";
}

// if($_GET){
//     echo $_GET['produit'] . " à la " . $_GET['variete'] . '<br>';
//     echo "Vendu au prix de " . $_GET['prix'] . " €, aujourd'hui seulement !";
// }