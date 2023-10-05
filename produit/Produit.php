<?php
namespace App\produit;

class Produit
{

    protected $prix;
    protected $nom;


    public function __construct(float $prix, string $nom)
    {
        $this->prix = $prix;
        $this->nom = $nom;
    }

    /// getter et setter 


    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }


    // afficher les details du produit
    public function afficheDetails()
    {

?>
        <p>Details du produit</p>
        <ul>
            <li>le nom du produit : <?= $this->nom ?></li>
            <li>le prix du produit : <?= $this->prix ?> €</li>
        </ul>

<?php
    }
}
