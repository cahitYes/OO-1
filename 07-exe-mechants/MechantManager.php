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

}