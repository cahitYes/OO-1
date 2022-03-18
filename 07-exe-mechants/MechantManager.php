<?php

<<<<<<< HEAD
// gestion de la table mappée Personnage
class MechantManager
{
    // Attributs
    private PDO $connection;

    // Méthodes

    // constructeur
    /**
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    // insertion d'un Personnage
    public function insertMechant(Mechant $lui): bool|int
    {
        // request
        $sql = "INSERT INTO `mechant`(`nameMechant`, `forceMechant`,`experienceMechant`, `statusMechant`) VALUES (?,?,?,?)";
        // requête préparée
        $prepare = $this->connection->prepare($sql);

        try {
=======
class MechantManager
{
    // contiendra la connexion PDO
    private PDO $db;

    // le constructeur va hydrater l'instance, dans ce cas avec une connexion PDO
    public function __construct(PDO $con){
        $this->db = $con;
    }

    // On va récupérer tous les méchants ordonnés par `experienceMechant` ascendant
    public function getMechants(): array{
        $sql = "SELECT * FROM `mechant`  ORDER BY `experienceMechant` ASC;";
        $mechants = $this->db->query($sql);
        return $mechants->fetchAll(PDO::FETCH_ASSOC);
    }

    // On veut insérer le nouveau méchant dans la table mechant - on récupère true ou l'échec
    public function insertMechant(Mechant $lui): bool|Exception
    {
        $sql = "INSERT INTO `mechant` (`nameMechant`, `forceMechant`, `experienceMechant`, `statusMechant`) VALUES (?,?,?,?);";
        $prepare = $this->db->prepare($sql);
        try{
>>>>>>> c59ca19335958ff6f8677487b54dcb48df5b3370
            $prepare->execute([
                $lui->getNameMechant(),
                $lui->getForceMechant(),
                $lui->getExperienceMechant(),
                $lui->getStatusMechant(),
<<<<<<< HEAD

            ]);
            return true;
        } catch (Exception $e) {
           return $e->getCode();
=======
                ]);
            return true;
        }catch (Exception $e){
            return $e;
>>>>>>> c59ca19335958ff6f8677487b54dcb48df5b3370
        }

    }

<<<<<<< HEAD
    public function SelectAllMechant(): array
    {
        $sql = "SELECT * FROM `mechant` ORDER BY `experienceMechant` ASC";
        $request = $this->connection->query($sql);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }


=======
>>>>>>> c59ca19335958ff6f8677487b54dcb48df5b3370
}