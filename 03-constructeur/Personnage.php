<?php

class Personnage
{
    // Attributs ou propriétés, en général toujours private (ou protected qu'on verra lors des extends)
    private  $nom;
    private  $forcePerso;
    private  $degats;
    private  $niveau;
    private  $experience;
    private  $vie;

    // constantes
    const VIE_DE_BASE = 1000;

    // méthodes

    // Méthodes magiques

    // Le constructeur
    // Il permet de remplir le personnage dès sa création (lors de l'instanciation avec le mot clef new)
    public function __construct($nom = 'Anonyme', $force = 10, $degat = 5, $niv = 1, $exp = 0, $vie = self::VIE_DE_BASE)
    {
        // self représente la classe : self::VIE_DE_BASE
        // $this représente l'instance
        $this->setNom($nom);
        $this->setForcePerso($force);
        $this->setDegats($degat);
        $this->setNiveau($niv);
        $this->setExperience($exp);
        $this->setVie($vie);
        echo $this->getNom();
        echo $this->nom;
    }

    // getters (accessors) : permettent de récupérer en dehors de la classe les attributs private ou protected de l'instance créé

    public function getNom()
    {
        // récupération du nom de l'instance
        return $this->nom;
    }
    public function getForcePerso()
    {
        return $this->forcePerso;
    }
    public function getDegats()
    {
        return $this->degats;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function getVie()
    {
        return $this->vie;
    }

    // setters (ou mutators) : permettent de modifier dans la classe les attributs private ou protected de l'instance créé

    public function setNom($s)
    {
        if (is_string($s) && strlen($s) > 4 && strlen($s) < 100) {
            // remplissage de l'instance
            $this->nom = $s;
        } else {
            // création d'une exception
            trigger_error("Nom non conforme", E_USER_NOTICE);
            //throw new Exception("Nom non conforme", E_USER_NOTICE);
        }
    }
    public function setForcePerso($f)
    {
        if (is_int($f) && !empty($f)) {
            $this->forcePerso = $f;
        } else {
            trigger_error("Force non conforme", E_USER_NOTICE);
        }
    }
    public function setDegats(float $d)
    {
        if ($d >= 0) {
            $this->degats = $d;
        }
    }
    public function setNiveau(int $n)
    {
        $this->niveau = $n;
    }
    public function setExperience(int $e)
    {
        $this->experience = $e;
    }
    public function setVie(int $v)
    {
        $this->vie = $v;
    }
}
