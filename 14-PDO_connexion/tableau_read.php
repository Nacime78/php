<?php

$pdo = new PDO('mysql:host=localhost; dbname=boutique2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

?>
<!-- afficher dans un tableau tous les users récupérés en BDD -->

<table border='1' style='border-collapse: collapse'>
    <?php $afficheUsers = $pdo -> query("SELECT * FROM membre"); ?>
    <thead>
        <tr>
            <!-- boucle for, dans le <tr>, autour des <th> pour générer toutes les colonnes du tableau (pour chaque indice) -->
            <?php for($i = 0; $i < $afficheUsers->columnCount(); $i++): 
                $colonne = $afficheUsers->getColumnMeta($i);
                // echo "<pre>"; print_r($colonne); echo "</pre>";
                ?>
                <?php if($colonne['name'] !== 'mdp'): ?>
                <th style="padding: 5px"><?= $colonne['name'] ?></th>
                <?php endif; ?>
            <?php endfor; ?>
        </tr>
    </thead>
    <tbody>
        <?php while($user = $afficheUsers->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <?php foreach($user as $key => $value): ?>
                <?php if($key !== 'mdp'): ?>
                <td style="padding: 5px"><?= $value ?></td>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

