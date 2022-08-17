<?php

define('VILLE', 'Poissy');

echo VILLE;

// les constantes magiques sont des constantes déjà codées mise à notre disposition (il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)

// cette constante donne le chemin physique jusqu'au fichier (file)
echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';