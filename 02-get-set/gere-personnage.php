<?php

declare(strict_types=1);
require_once 'Personnage.php';

$bilel = new Personnage();
echo "<br>";
echo "<hr>";
echo $bilel->getNom();
echo "<hr>";
// le setter change la valeur
$bilel->setNom("Bilel");
// le getter la récupère
echo $bilel->getNom();

echo "<hr>";
$bilel->setForcePerso(250);
echo $bilel->getForcePerso();

echo "<hr>";
$bilel->setDegats(15);
echo $bilel->getDegats();

echo "<hr>";
$bilel->setNiveau(1);
echo $bilel->getNiveau();
