<?php

$garage_vehicules = array(
    "BMW" => array('couleur' => 'rouge', 'plaque' => 'PL-123-LE', 'annee' => '2018', 'carburant' => 'diesel' ),
    "Mercedes" => array('couleur' => 'noir', 'plaque' => 'ZR-159-HR', 'annee' => '2010', 'carburant' => 'essence' ),
    "Renault" => array('couleur' => 'blanc', 'plaque' => 'FF-502-EZ', 'annee' => '2015', 'carburant' => 'gazole' ),
    "Peugeot" => array('couleur' => 'vert', 'plaque' => 'HS-654-CF', 'annee' => '2009', 'carburant' => 'biodiesel' ),
);

echo "<pre>"; var_dump($garage_vehicules); echo"</pre>";

echo '<hr>';

echo '<p>' . $garage_vehicules['BMW']['couleur'] . '</p>';

echo '<hr>';

echo '<p>' . $garage_vehicules['Peugeot']['annee'] . '</p>';

echo '<hr>';

echo '<p>' . $garage_vehicules['Renault']['plaque'] . '</p>';

echo '<hr>';

echo '<p>' . $garage_vehicules['Mercedes']['carburant'] . '</p>';

echo '<hr>';

foreach($garage_vehicules as $key => $value){

    echo "<ul>";

        if(is_array($value)){

            echo "<li>";
            echo "<h4>" . $key . "</h4>";

                foreach($value as $key => $value){
                    echo "<p>$key: $value</p>";
                }

            echo "</li>";

        }

    echo "</ul>";
    
}