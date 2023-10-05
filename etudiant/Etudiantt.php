<?php

namespace App\etudiant;

include "Personne.php";


class Etudiantt extends Personne
{

    private $matricule;
    private $programme;

    public function __construct($nom, $prenom, $age, $matricule, $programme)
    {
        parent::__construct($nom, $prenom, $age);
        $this->matricule = $matricule;
        $this->programme = $programme;
    }


    public function afficherInfoEtudiant()
    {
        echo "je suis l'étudiant(e) {$this->nom} {$this->getPreonm()} j'ai {$this->getAge()} , numero d'etudiant :{$this->matricule} iscrit dans le programme {$this->programme}";
    }
}

$etud = new Etudiantt("dupont", "lisa", 20, 1442542, "informatqiue");
$etud->afficherInfoEtudiant();
