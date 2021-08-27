<?php

class employe
{
    public $nom;
    public $prenom;
    public $age;

    function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    function presentation()
    {
        echo ("je m'appelle " . $this->nom . ' ' . $this->prenom . " j'ai " . $this->age . ' ans');
    }

    function setAge($age)
    {

        if (is_int($age)) {
            $this->age = $age;
        } else {
            throw new Exception("l'age doit etre un nombre entier !!!");
        }
    }
}

class patron extends employe
{

    public $voiture;

    function __construct($nom, $prenom, $age, $voiture)
    {
        parent::__construct($nom, $prenom, $age);
        $this->voiture = $voiture;
    }

    function rouler()
    {
        echo ("le patron a une voiture " . $this->voiture);
    }
}

$employe1 = new employe("messaoud", "slim", 30);
$employe1->setAge(55);
$employe1->presentation();
echo $employe1->voiture = "kia";

$patron1 = new patron("ellouze", "sawsen", 65, "kia picanto");
echo('<br/>');
$patron1->rouler();
