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
    public function __construct(string $nom)
    {
        // $this représente l'instance
        $this->setNom($nom);
        // on va mettre les skills au personnage
        $this->createSkill();
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
        if (is_string($s) && strlen($s) >= 4 && strlen($s) < 100) {
            // remplissage de l'instance
            $this->nom = $s;
        } else {
            // création d'une exception
            trigger_error("Nom non conforme", E_USER_NOTICE);
            //throw new Exception("Nom non conforme");
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

    // méthodes personnelles

    // méthode qui va donner des valeurs à un nouveau personnage lors de son instanciation, comme on ne doit pas pouvoir le modifier après l'instancuation, on va la mettre en private
    private function createSkill()
    {
        // changement de l'attribut de l'instance ($this = instance) avec la constante VIE_DE_BASE (self = la classe) + une valeur au hasard
        $this->vie = self::VIE_DE_BASE + mt_rand(-150, 150);
        $this->niveau = 1;
        $this->experience = 0;
        $this->forcePerso = mt_rand(25, 30);
        $this->degats = mt_rand(5, 10);
    }

    // on va donner la possibilité à une instance de Personne de frapper son adversaire
    public function frappeAutre(Personnage $autre)
    {
        $forcePerso = $this->forcePerso + $this->dice();
    }

    // jet de dé (side = face et roll = nombre de jet)
    private function dice(int $side = 20, int $roll = 1)
    {
        $force = 0;
        for ($i = 0; $i < $roll; $i++) {
            $force += mt_rand(1, ($side + $this->niveau));
        }
        return $force;
    }
}
