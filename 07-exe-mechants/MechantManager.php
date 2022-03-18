<?php

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
            $prepare->execute([
                $lui->getNameMechant(),
                $lui->getForceMechant(),
                $lui->getExperienceMechant(),
                $lui->getStatusMechant(),
                ]);
            return true;
        }catch (Exception $e){
            return $e;
        }

    }

}