<?php
$pdo = new PDO('mysql:host=localhost; dbname=securite', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


if($_POST){

    // Pour annihiler les injections sql, en plus des requêtes préparées, il faut utiliser des fonctions prédéfinies telles que htmlentities qui vont neutraliser tous les simples quotes, dièses et autres caractères spéciaux qui peuvent perturber la requêtes sql d'origine

    $_POST['pseudo'] = htmlentities($_POST['pseudo'], ENT_QUOTES);
    $_POST['mdp'] = htmlentities($_POST['mdp'], ENT_QUOTES); // ' OR id_user = '1, bloque cette injection sql

    $rechercheUser = $pdo->query("SELECT * FROM user WHERE pseudo = '$_POST[pseudo]' AND mdp = '$_POST[mdp]' ");

    $user = $rechercheUser->fetch(PDO::FETCH_ASSOC);
}

?>
<h1>Espace Connexion</h1>
<form method='POST' action="">
    <label for="pseudo">Pseudo</label>
    <input type="text" id='pseudo' name='pseudo'>
    <br><br>
    <label for="mdp">Mot de passe</label>
    <input type="text" id='mdp' name='mdp'>
    <br><br>
    <input type="submit" value='Envoyer'>
</form>
<br><hr><br>
<?php if($_POST): ?>
    <?php if(!empty($user)): ?>
    <?php print_r($rechercheUser) ?>
        <h2>Vos informations de connexion</h2>
        <h3>Félicitations vous êtes connectés</h3>
        <p>Votre pseudo est: <?= $user['pseudo'] ?></p>
        <p>Votre email est: <?= $user['email'] ?></p>
        <h3>Votre connexion a échoué</h3>
    <?php else: ?>
        <p>Votre connexion a echoué</p>
    <?php endif; ?>
<?php endif; ?>