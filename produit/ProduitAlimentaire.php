<?php

namespace App\produit;
include "Produit.php";
class ProduitAlimentaire  extends Produit
{
    private $dateExpiration;


    public function __construct($prix, $nom, $dateExpiration)
    {
        parent::__construct($prix, $nom);
        $this->dateExpiration = $dateExpiration;
    }

    public function afficheDetails()
    {
?>
        <p>Details du produit Alimentaire</p>
        <ul>
            <li>le nom du produit : <?= $this->nom ?></li>
            <li>le prix du produit : <?= $this->prix ?> €</li>
            <li>la date d'dateExpiration est <?= $this->dateExpiration ?> </li>
        </ul>

<?php
    }
}

$objet = new ProduitAlimentaire(1.4, "lait", "2010-2-10");

$objet->afficheDetails();
