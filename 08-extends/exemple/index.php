<?php
require "./Test.php";
require "./ChildTest.php";

$test = new Test();
$childTest = new ChildTest();

var_dump($test,$childTest);

//l'enfant possède les propriétés et méthodes publics et y a accès facilement
echo $childTest->public."</br>";
echo $childTest->getPublic()."</br>";

//l'enfant possède les propriétés et méthodes protégées et a besoin d'un getter pour y avoir accès
//Fonctionnera quoi qu'il arrive
//echo  $childTest->protected."</br>";
echo  $childTest->getProtected()."</br>";

//l'enfant possède les propriétés et méthodes privées mais ne peut overload|attribuer une méthode|propriété privée
// d'un parent mais peut y avoir accès via les méthodes du parent
echo $childTest->getPrivate()."</br>";
echo $childTest->getSayCoucou();
//echo $childTest->sayCoucou();
echo $childTest->setPrivate("test")."</br>";