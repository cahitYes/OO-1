<?php
require_once "Personnages.php";
require_once "Magicien.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$persoVide = new Personnages();
$magicienVide = new Magicien();

var_dump($persoVide,$magicienVide);

// modification puis lecture d'un attribut publique - fonctionne dans l'enfant comme le parent
$magicienVide->forcePerso = 7;
echo $magicienVide->forcePerso;
echo "<hr>";
echo Personnages::VIE_DE_BASE;
echo "<hr>";
echo $persoVide::VIE_DE_BASE;
echo "<hr>";
echo $magicienVide::VIE_DE_BASE;
echo "<hr>";
echo Magicien::VIE_DE_BASE;
echo "<hr>";
// interdit que ça soit private ou protected : echo Magicien::ENDURANCE;
?>
<h3>Les Méthodes publiques sont toutes héritées</h3>
<?php

$magicienVide->frapper($persoVide);
$persoVide->frapper($magicienVide);
echo "<hr><p>Surchargées</p>";
$magicienVide->frapper2($persoVide);
$persoVide->frapper2($magicienVide);
echo "<hr><p>Écrasées</p>";
$magicienVide->frapper3($persoVide);
$persoVide->frapper3($magicienVide);



var_dump($persoVide,$magicienVide);
?>

</body>
</html>
