<?php

if($_GET){
    echo "Vous avez choisi le menu " . $_GET['menu'] . ", il vous coutera " . $_GET['prix'] . ' € et il sera prêt dans ' . $_GET['temps'] . ' minutes <br>';
}else{
    echo "<button><a href='?menu=Big Mega Burger&prix=15&temps=12'>Menu USA</a></button>";
    echo '<br>';
    echo '<br>';
    echo "<button><a href='?menu=Wok de crevettes&prix=16&temps=25'>Menu Thai</a></button>";
    echo '<br>';
    echo '<br>';
    echo "<button><a href='?menu=Wok de crevettes&prix=16&temps=25'>Menu Thai</a></button>";
    echo '<br>';
    echo '<br>';
    echo "<button><a href='?menu=Paella&prix=27&temps=45'>Menu Espagne</a></button>";
}