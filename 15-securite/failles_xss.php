<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form method="POST" action="">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Eg Yadaf">
        <br><br>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="3" cols="15" placeholder="Votre description"></textarea>
        <br><br>
        <label for="annee">Année de naissance</label>
        <select name="annee" id="annee">
            <?php
                for($i = date('Y'); $i >= date('Y') - 100 ; $i--){
                    echo "<option> $i </option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Soumettre">
    </form>

    <!-- La faille est d'ajouter <style>body{display: none;}</style> dans la zone de texte -->
    <!-- htmlspecialchars résoud la faille en neutralisant tous les caractères spéciaux qui pourraient perturber l'affichage de notre page -->

    <?php if($_POST): ?>
    <ul>
        <li>Prénom: <?= htmlspecialchars($_POST['prenom']) ?></li>
        <li>Description: <?= htmlspecialchars($_POST['description']) ?></li>
        <li>Année de naissance: <?= htmlspecialchars($_POST['annee']) ?></li>
    </ul>
    <?php endif; ?>
</body>
</html>