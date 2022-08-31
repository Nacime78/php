<!-- un formulaire codé seulement en HTML et CSS n'a pas d'utilité. On doit lui ajouter un traitement PHP pour pouvoir récupérer les infos renseignées dedans et les utiliser plus tard. C'est PHP qui va rendre dynamique le formulaire, sinon, ce n'est qu'un simple affichage inutile -->
<!-- pour que le formulaire soit connecté à la méthode POST, il faut absolument ecrire dans la balise form method=POST...action sert a autre chose on verra ça plus tard -->
<form method="POST" action="">
    <!-- dans les attributs du champs Prénom ci dessous, seul name = prenom est important, obligatoire en PHP, pour que les informations puissent etre récupérées et envoyées en BDD. for (dans label et id dans input n'ont aucune importance pour PHP et l'envoi en BDD. Ils sont par contre utile en affichage pour de l'UX, améliorer l'expérience utilisateur) -->
    <!-- l'attribut name est indispensable pour que les données puissent etre envoyées en BDD -->
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
<!-- si je n'ecris pas cette condition if($_POST), j'aurais droit aux warnings, undifined key prenom, key description etc... C'est normal, au premier chargement de la page, le formulaire est vide, aucune info n'a encore transité...d'ou le undifined key -->
<!-- ci-dessous, syntaxe contractée pour une condition if(). Elle permet de générer plus rapidement du code HTML que si on était dans un grand passage PHP nécessitant beaucoup de echo -->
<?php if($_POST): ?>
<ul>
    <!-- j'ai besoin de la superglobale $_POST pour récupérer les infos qui ont transité dans le formulaire ... je crochète ensuite à l'indice qui m'interesse (cet indice existe car on l'a renseigné pour l'attribut n ame dans le formulaire, d'ou l'utilité de name) -->
    <li>Prénom: <?= $_POST['prenom'] ?></li>
    <li>Description: <?= $_POST['description'] ?></li>
    <li>Année de naissance: <?= $_POST['annee'] ?></li>
</ul>
<!-- la syntaxe contractée if() nécessite pour la fermer son endif; sinon erreur PHP -->
<?php endif; ?>