<?php

require_once 'Personnage.php';

$a = new Personnage("Aurélie");

$b = new Personnage("Manu");


var_dump($a, $b);

while ($a->getVie() > 0) {
    $a->frappeAutre($b);
    if ($b->getVie() <= 0) break;
    $b->frappeAutre($a);
}
