<?php

class Personnage
{
    // Attributs ou propriétés, en général toujours private (ou protected qu'on verra lors des extends) - À partir de PHP 7.4, on type nos attributs : https://www.php.net/manual/fr/migration74.new-features.php
    private int $idPersonnage;
    private string $nom;
    private int $forcePerso;
    private float $degats;
    private int $niveau;
    private int $experience;
    private int $vie;

    // constantes Modificatrices de visibilité des constantes de classe, à partir de PHP 7.1 : https://www.php.net/manual/fr/language.oop5.constants.php
    public const VIE_DE_BASE = 1000;


    // méthodes


    // constructeur
    public function __construct()
    {

    }


    // getters

    /**
     * @return int
     */
    public function getIdPersonnage(): int
    {
        return $this->idPersonnage;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getForcePerso(): int
    {
        return $this->forcePerso;
    }

    /**
     * @return float
     */
    public function getDegats(): float
    {
        return $this->degats;
    }

    /**
     * @return int
     */
    public function getNiveau(): int
    {
        return $this->niveau;
    }

    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @return int
     */
    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * @param int $idPersonnage
     * @return Personnage
     */
    public function setIdPersonnage(int $idPersonnage): Personnage
    {
        $this->idPersonnage = $idPersonnage;
        return $this;
    }


    // setters

    /**
     * @param string $nom
     * @return Personnage
     */
    public function setNom(string $nom): Personnage
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @param int $forcePerso
     * @return Personnage
     */
    public function setForcePerso(int $forcePerso): Personnage
    {
        $this->forcePerso = $forcePerso;
        return $this;
    }

    /**
     * @param float $degats
     * @return Personnage
     */
    public function setDegats(float $degats): Personnage
    {
        $this->degats = $degats;
        return $this;
    }

    /**
     * @param int $niveau
     * @return Personnage
     */
    public function setNiveau(int $niveau): Personnage
    {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * @param int $experience
     * @return Personnage
     */
    public function setExperience(int $experience): Personnage
    {
        $this->experience = $experience;
        return $this;
    }

    /**
     * @param int $vie
     * @return Personnage
     */
    public function setVie(int $vie): Personnage
    {
        $this->vie = $vie;
        return $this;
    }


}
