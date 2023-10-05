<?php

namespace App\etudiant;
class Etudiant
{
    public $nom;
    public $prenom;
    public $matricule;


    public function __construct(string $nom, string $prenom, string $matricule)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
    }

    public function afficherInfosEtudiant()
    {
?>
        <p>les information de l'etudiant :</p>
        <li>Nom : <?= $this->nom ?></li>
        <li>Prenom : <?= $this->prenom ?></li>
        <li>Matricule : <?= $this->matricule ?></li>
<?php
    }
}
