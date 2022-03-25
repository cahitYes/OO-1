<?php
require_once "Personnage.php";
require_once "Magicien.php";
?>
<html>
<head></head>
<body>
<?php
$persoVide = new Personnage([]);
$magicienVide = new Magicien([]);
var_dump($persoVide,$magicienVide);
?>
</body>

</html>

