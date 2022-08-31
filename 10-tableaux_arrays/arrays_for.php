<?php

// fichier pour afficher les éléments du même tableau listePays, mais avec une boucle for()

$listePays[] = "France";
$listePays[] = "Italie";
$listePays[] = "Algérie";
$listePays[] = "Espagne";
$listePays[] = "Argentine";

echo "<ol>";
for($i = 0; $i < count($listePays); $i++){
        echo "<li>" . $listePays[$i] . "</li>";
    }
echo "</ol>";