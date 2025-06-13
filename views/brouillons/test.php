<?php
$nb = 0;
$tab = array();
while($nb < 5){
    $nb++;
    array_push($tab,$nb);
}

var_dump($tab[0]);
foreach ($tab as $cle => $valeur) {
    echo $valeur . "\n";
}