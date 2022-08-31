<?php

$erreur = '';

// les requêtes préparées, lorsqu'on doit ajouter, modifier ou supprimer des informations en BDD, sont à privilégier par rapport aux requêtes en query (que pour SELECT)
// Elles sont un des moyens pour éviter les injections sql (envoi de requêtes sql dans l'url ou dans un formulaire) pour pirater une BDD (ce que ne fait pas query)

if($_POST){
    if(!isset($_POST['pseudo']) || !preg_match('#^[a-zA-Z0-9-_.]{3,20}$#', $_POST['pseudo'])){
        $erreur .= "<div><mark>Erreur format pseudo</mark></div>";
    }

    if(!isset($_POST['code_postal']) || !ctype_digit($_POST['code_postal']) || strlen($_POST['code_postal']) != 5){
        $erreur .= "<div><mark>Erreur format code postal</mark></div>";
    }

    // Pour savoir si on enclenche la procédure d'envoi des données en BDD, on va tester $erreur avec la fonction prédéfinie empty()
    // si l'utilisateur s'est trompé en remplissant le formulaire, on a généré un message d'erreur que l'on a concaténé à $erreur. $erreur ne sera donc pas vide, l'utilisateur s'est trompé, on n'envoie pas les infos en BDD
    // par contre, si $erreur est vide (empty) ça veut dire que notre formulaire a été bien rempli par le user, on peut commencer la procédure d'envoi en bdd
    // la requete prepare necessite une syntaxe plus longue et spéciale par rapport à query
    // Dans les parenthèses après VALUES, on ne fait pas directement référence à $_POST['pseudo'] mais à :pseudo (les : sont appelés un pointeur nommé)
    // et c'est dans le bindValue (obligatoire avec prepare()) qui va suivre que l'on va indiquer que :pseudo fait référence à $_POST['pseudo'] (valeur qui sera envoyé dans la bonne colonne de la table membre)
    // pour chaque bindValue, on indiquera aussi le type de valeur que la bdd va recevoir
    // si c'est une chaine de caractères, on spécifiera PDO::PARAM_STR (pour le pseudo)
    //  Si c'est un nombre entier, ça sera PDO::PARAM_INT (pour le code postal)
    if(empty($erreur)){
        $inscrireUser = $pdo->prepare("INSERT INTO membre (pseudo, code_postal) VALUES (:pseudo, :code_postal)");
        $inscrireUser->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $inscrireUser->bindValue(':code_postal', $_POST['code_postal'], PDO::PARAM_INT);
        $inscrireUser->execute();

        // la même avec query
        // $inscrireUser = $pdo->query("INSERT INTO membre (pseudo, code_postal) VALUES ($_POST[pseudo], $_POST[code_postal]) ");
        // }
}

?>
<?= $erreur; ?>
<form method="POST" action="">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" max-length="20" required>
    <br><br>
    <label for="code_postal">Code postal</label>
    <input type="text" id="code_postal" name="code_postal" placeholder="Votre code postal">
    <br><br>
    <input type="submit" value="Envoyer">
</form>