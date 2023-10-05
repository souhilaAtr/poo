<?php
namespace App;

class Livre
{
    private $titre;
    private $auteur;
    private $annePublication;



    public function __construct(string $titre, string $auteur, string $anne)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->annePublication = new DateTime($anne);
        $this->annePublication = $this->annePublication->format("Y-m");
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        return $this->titre = $titre;
    }


    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        return $this->auteur = $auteur;
    }

    public function getannePubliation()
    {
        return $this->annePublication;
    }
    public function setannePubliation($annePublication)
    {
        return $this->annePublication = $annePublication;
    }


    public function afficheInfosLivre()
    {

?>
        <p>les information du livre :</p>
        <li>auteur : <?= $this->auteur ?></li>
        <li>titre : <?= $this->titre ?></li>
        <li>anne de publication : <?= $this->annePublication ?></li>
<?php

    }
}
