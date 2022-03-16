<?php
// chargement des dépendances
require_once "config.php";
require_once "Personnage.php";
require_once "PersonnageManager.php";

// tentative de connexion à notre DB
try {
    $db = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Instanciation de notre manager avec la connexion PDO
$persoManager = new PersonnageManager($db);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$cahit = new Personnage([
        "lulu"=>"lala",
        "youpiCaBoum"=>"yes",
        "slup"=>25.25,
        "vie"=>5,
        25=>"jkhjih",
        "nom"=>"pause",
]);

var_dump($cahit);



?><hr>
<?php
$recupOne = $persoManager->SelectPersonnage(46,'Joelina');
var_dump($recupOne);
$joueur1 = new Personnage($recupOne);
var_dump($joueur1);
?>
<h3>Insertion depuis un formulaire</h3>
<form action="" method="post" name="balek">

    <input name='nom' type="text" placeholder="votre nom"><br>
    <input name='forcePerso' type="number" placeholder=forcePerso><br>
    <input name='degats' type="number" placeholder='degats'><br>
    <input name='niveau' type="number" placeholder='niveau'><br>
    <input name='experience' type="number" placeholder='experience'><br>
    <input name='vie' type="number" placeholder='vie'><br>
    <input type="submit" value="créer le personnage">
</form>
<?php

// si on a envoyé le formulaire
if(!empty($_POST)){
    // instanciation des valeurs passée par le formulaire
    $insert = new Personnage($_POST);
    var_dump($insert);
    // insertion dans la DB
    echo $persoManager->insertPersonnage($insert);

}
?>
</body>

</html>