<?php
require_once "Personnage.php";

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
    // appel d'une méthode static, ce qui permet d'avoir accès à une méthode de la classe sans l'instancier !
    echo Personnage::dice();
    ?>
</body>

</html>