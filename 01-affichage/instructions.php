<?php

// syntaxe au dessus pour ouvrir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// C'est plus facile pour debug
// on peut aussi le fermer mais plus difficle à corriger en cas de problème
// ?/

// instruction d'affichage très souvent utilisée
echo "Bonjour, je suis Aziz, votre formateur en PHP <br>";
// le ; est une fin d'instruction, il est obligatoire pour signifier cet ordre au navigateur, sinon, erreur php
// une seconde instruction est possible en PHP avec le mot print, mais il n'est que très peu utilisé, dans pratiquement aucun script ou tutoriel

?>

<!-- Passage contracté en php -->
<!-- il ne necessite pas de echo, il est implicite, il ne sert que pour afficher -->
<?= "Nous sommes jeudi <br>" ?>
<?php 
// 02 - Affichage non conventionnel (print_r et var_dump)
// l'affichage non conventionnel ne sert que durant la période de développement du site. Il est utile pour le développeur, pas pour le visiteur du site
// le jour où le site est mis en ligne, il faut mettre tous les print_r et var_dump en commentaire ou les supprimer
// je déclare une variable pour ensuite tester son 
$prenom = 'Aziz';
// la balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer momentanément
echo "<pre>"; 
print_r(gettype($prenom));
echo "</pre>";

// 03 - les commentaires en php

// osef

// 04 - mix PHP et HTML

echo '<h1> Salut </h1>';
echo 'Nous sommes des apprenants du <strong> Pole S </strong> <br>';
echo '<div class = "heure">Le cours commence à 9h00 <br></div>';

?>
<!-- les syntaxes en dessous ne sont pas tolérées, même si elles fonctionnents. Elles alternent trop les passages d'un langage à l'autre. C'est dit code "sale" -->
<h1><?php echo "Bonjour"; ?></h1> 
<?php echo "Nous sommes " ?> <strong>jeudi</strong> <?php echo " et il est 11h30"; ?>

<!-- Le code PHP n'est pas visible dans le code source de la page. C'est la preuve que le navigateur ne peut gérer ce langage, seuelement les langages front -->

