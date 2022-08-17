<?php

$test = "exemple";

echo "Ma variable $test est une chaine de caractères <br>"; // concaténation automatique
echo 'Ma variable $test est une chaine de caractères <br>'; // non automatique
echo 'Ma variable ' . $test . ' est une chaine de caractères <br>';
echo 'Ma variable $test n\'est pas interprétée <br>'; // caractère d'échappement, il faut mettre un anti-slash

$premier += $