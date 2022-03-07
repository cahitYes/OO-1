<?php

require_once 'Personnage.php';

$a = new Personnage("Aurélie");

$b = new Personnage("Manu");


var_dump($a, $b);

$a->frappeAutre($b);
