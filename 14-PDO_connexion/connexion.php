<?php

// PDO est une surcouche de PHP, directement intégrée à ce dernier depuis php version 5.1
// PDO permet de connecter notre projet à sa base de données, puis de mêler du langage PHP avec des requêtes en sql

// pour récupérer les méthodes de la classe PDO, je dois créer un objet issu de cette classe ($pdo = new PDO). C'est une syntaxe obligatoire en Orienté Objet
// comme on travaille en local, le host sera automatiquement localhost (host=localhost)
// dbname (pour database name) demande le nom de la base de données à laquelle on veut se connecter (ici, boutique), 'roott est l'identifiant obligatoire à donner en local. Enfin, '' les simples quotes avec rien d'ecrit dedans est notre password (obligatoirement ecrit ainsi en local)
// les deux infos dans le array veulent dire que l'on choisi un mode warning pour avoir les messages d'erreur de PHP, puis que l'on choisit un encodage utf8 pour la base de données

$pdo = new PDO('mysql:host=localhost; dbname=boutique2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// print_r get_class_methods pour visualiser toutes les méthodes (fonctions prédéfinies) de la classe PDO, notammmenbt query et prepare que l'on v a beaucoup utiliser

echo "<pre>"; 
print_r(get_class_methods($pdo));
echo "</pre>";

// 01 query
// query est une méthode de PDO qui cible des éléments en BDD
// elle les cible via une requête en SQL (ci-dessous, je cible tous les users dans la table membre, de la BDD boutique2, qui ont le prénom Natasha)

// le résultat de cette requete, faite avec méthode query,sera stocké dans une variable que je nomme $afficheUtilisateurs

$afficheUtilisateurs = $pdo -> query("SELECT * FROM membre WHERE prenom = 'Natasha' ");


// 02 FETCH
//  la méthode fetch permet de récupérer les donées ciblées avec la méthode query
// les deux méthodes fonctionnent ensemble. Query cible pour que ensuite fetch récupère

// FETCH _ASSOC permet de faire une recherche par le nom de la colonne dans la table membre (exemple,la colonne pseudo, la colonne mdp etc)

// il existe aussi FETCH_NUM, qui fait une recherche par l'indice de la colonne
// Existe aussi FETCH_BOTH, qui fait une recherche par le nom et l'indice de la colonne
// on utilise très souvent FETCH_ASSOC car il est plus rapide

$user = $afficheUtilisateurs->fetch(PDO::FETCH_ASSOC);

echo "<pre>"; var_dump($user);echo"</pre>";

echo "<pre>";print_r($user);echo"</pre>";

echo "<p> Le user qui a le pseudo $user[pseudo] habite dans la ville de $user[ville] dont le code postal est $user[code_postal]</p>";

echo "<hr>";

// faire une requête qui cible les produits dont la catégorie est pantalon
// récupérer le résultat de cette requête
// afficher le résultat de tous les produits concernés par cette catégorie (exemple, le produit qui a la catégorie pantalon, a la taille bla bla et son prix est bla bla)

$affichePantalon = $pdo -> query("SELECT * FROM produit WHERE categorie = 'Pantalons' ");

$pantalon = $affichePantalon -> fetch(PDO::FETCH_ASSOC);

echo "<pre>"; var_dump($pantalon);echo"</pre>";

while($pantalon = $affichePantalon -> fetch(PDO::FETCH_ASSOC)){  
    echo "<p> Le produit qui a la catégorie $pantalon[categorie], a la taille $pantalon[taille] et son prix est $pantalon[prix] </p>";
}

// requête pour récupérer tous les produits, sans cibler une catégorie, mais je ne veux en afficher que 10 (les dix premiers)

$afficheDix = $pdo -> query("SELECT * FROM produit LIMIT 0, 10");

$limitDix = $afficheDix -> fetchall(PDO::FETCH_ASSOC);

echo "<pre>"; print_r($limitDix);echo"</pre>";

