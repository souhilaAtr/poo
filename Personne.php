<?php
namespace App;

class Personne
{

    protected $nom;
    private $prenom;
    private $age;


    public function __construct(string $nom, string $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * get function
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * set function
     *
     * @param [string] $nom
     * @return string
     */
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }

    /**
     * get prenom function
     *
     * @return string
     */
    public function getPreonm()
    {
        return $this->prenom;
    }
    /**
     * set prenom function
     *
     * @param [string] $prenom
     * @return string
     */
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }

    /**
     * definir l'age function
     *
     * @param [int] $age
     * @return int
     */
    public function setAge($age)
    {
        return $this->age = $age;
    }
    /**
     * recupérer l'age function
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     *  affiche info function
     *
     * @return void
     */
    public function afficherInformations()
    {
?>
        <h1>les information sur la personne :</h1>
        <ol>
            <li><?= $this->nom ?></li>
            <li><?= $this->prenom ?></li>
            <li><?= $this->age ?></li>
        </ol>
<?php
    }
}
