<?php
// le tableau multi-dimentionnel ou à deux dimension permet de donner des spécificité a tous les éléments qui son dedans
// ainsi on aura pas qu'un éléments chaise , pantalon, ect... mais une chaise dont on pourra preciser le matériau, sa hauteur, son pris, ect... Idem pour le pantalon, on pourra preciser sa matiere, sa taille, sa couleur ect...
$marvel_hero = array(
    array('personnage' => 'Iron Man', 'prenom' => 'Tony', 'nom' => 'Stark'),
    array('personnage' => 'Spiderman', 'prenom' => 'Peter', 'nom' => 'Parker'),
    array('personnage' => 'Black Widow', 'prenom' => 'Natasha', 'nom' => 'Romanov'),
);

// le var_dump va permettre de bien visualiser cet aspect de tableau à 2 dimensions
echo "<pre>"; var_dump($marvel_hero); echo"</pre>";

// syntaxe pour récupérer une info d'un tableau multi-dimensionnel
echo '<p>' . $marvel_hero[1]['prenom'] . '</p>';

$marvel_hero = array(
    "Spiderman" => array('prenom' => 'Peter', 'nom' => 'Parker'),
    "Iron Man" => array('prenom' => 'Tony', 'nom' => 'Stark'),
    "Black Widow" => array('prenom' => 'Natasha', 'nom' => 'Romanov'),
);

echo "<pre>"; var_dump($marvel_hero); echo"</pre>";

// je ne crochète plus à $marvel_hero[2]['prenom'] mais directement avec le nom du personnage

echo '<p>' . $marvel_hero['Black Widow']['prenom'] . '</p>';

foreach($marvel_hero as $key => $value){

    echo "<ul>";
        // je teste si value est un tableau (dans le tableau $marvel_hero... c'est le cas, j'exécute donc ce qui est dans le bloc d'instructions)
        if(is_array($value)){
            echo "<li>";
            // j'affiche dans un <h4> l'indice du tableau $marvel_hero
            echo "<h4>" . $key . "</h4>";
            // puis nouvelle foreach pour récupérer les éléments de chaque sous-tableau
            // on pourrait donner n'importe quel nom aux indices et valeurs, mais j'écris $key2 et $value2 pour ne pas les confondre avec ceux de la ligne 33 (et pour dire que ce n'est pas une syntaxe obligatoire)
                foreach($value as $key2 => $value2){
                    // puis j'affiche dans <p> les valeurs de chacun
                    echo "<p>$key2: $value2</p>";
                }
            echo "</li>";
        }
    echo "</ul>";

}


