<?php
// chargement des dépendances
require_once "config.php";
require_once "Mechant.php";
require_once "MechantManager.php";

// tentative de connexion à notre DB
try {
    $db = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Instanciation de notre manager avec la connexion PDO
$mechantManager = new MechantManager($db);


//var_dump($_POST);
//var_dump(new Mechant($_POST));

// si on a envoyé le formulaire
if(!empty($_POST)){
    $il = new Mechant($_POST);
    $insertMechant = $mechantManager->insertMechant($il);
}

// On va récupérer tous les méchants ordonnés par `experienceMechant` ascendant
$recupAllMechants = $mechantManager->getMechants();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechant</title>
</head>

<body>
<h3>Insertion depuis un formulaire dans Mechant</h3>
<?php
if(isset($insertMechant)):
    echo ($insertMechant === true)? '<h3>Nouveau méchant créé</h3>': '<h3>Insertion échoué : '.$insertMechant->getMessage().'</h3>';
endif;
?>
<form action="" method="post" name="balek">
    <label for="nameMechant">nameMechant : <input type="text" name="nameMechant" id="nameMechant" required></label><br>
    <label for="forceMechant">forceMechant : <input type="number" min="1" max="9999" name="forceMechant"
                                                    id="forceMechant" required></label><br>
    <label for="experienceMechant">experienceMechant : <input type="number" min="1" max="9999" name="experienceMechant"
                                                              id="experienceMechant" required></label><br>
    <label for="statusMechant">statusMechant : <select name="statusMechant" id="statusMechant" required>
            <option value="1">Actif</option>
            <option value="0">Non Actif</option>
        </select></label><br>
    <input type="submit" value="create Mechant !">

</form>
<?php


?>
<hr>
<h3>Les méchants existants</h3>
<?php
foreach ($recupAllMechants as $item):
    ?>
    <h4><?= $item['nameMechant'] ?> (ID:<?= $item['idMechant'] ?>)</h4>
    <p>Force : <?= $item['forceMechant'] ?></p>
    <p>Expérience : <?= $item['experienceMechant'] ?></p>
    <p>Statut : <?= $item['statusMechant'] ?></p>
<?php
endforeach;
?>


</body>

</html>