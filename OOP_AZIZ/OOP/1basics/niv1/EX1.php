<?php
// 🔹 Niveau 1 : Débutant (Classes, objets et instances)

class Livre
{
    protected $titre;
    protected $auteur;
    protected $anneePublication;
    protected $disponible = true;


    public function __construct($titre, $auteur, $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
    }

    public function afficherDetails()
    {
        echo "{$this->titre}{$this->auteur}{$this->anneePublication}";
    }

    public function emprunter()
    {
        if ($this->disponible) {
            $this->disponible = false;
            echo "le livre  {$this->titre}  est emprunter  <br>";
        } else {
            echo "le livre  {$this->titre} deja empr <br> ";
        }
    }

    public function retourner()
    {
        if ($this->disponible) {
            $this->disponible = true;
            echo "le livre  {$this->titre}  est retourner <br>";
        } else {
            echo "le livre  {$this->titre} pas retourner <br>  ";
        }
    }
}


class Biblio  extends Livre
{

    public function __construct($titre, $auteur, $anneePublication){
        parent::__construct($titre,$auteur,$anneePublication);
    }
    private static $nombreLivres=0;
    private static $livres = [];


    public function ajouterLivre(Livre $livre)
    {
        self::$livres []= $livre;
        self::$nombreLivres++;
    }
    public function afficherTousLesLivres()
    {
        foreach (self::$livres as $myBok) {

        $myBok->afficherDetails();
        }
    }
    public static function getNombreLivre(){
        echo self::$nombreLivres;
    }
}



$newlivre3 = new Livre("asss", "ss", 3);
$newlivre2 = new Livre("all", "amine", 2);

$newlivre1 = new Livre("azert", "aaa", 1);
// $newlivre1->afficherDetails();
// $newlivre2->afficherDetails();

// $newlivre1->emprunter();
// $newlivre1->emprunter();
// // $newlivre1->retourner();

// $newlivre1->afficherDetails();
// $newlivre2->afficherDetails();


$biblio=new Biblio("aaa","aaaz",2222);
$biblio->ajouterLivre($newlivre1);
$biblio->ajouterLivre($newlivre2);
$biblio->ajouterLivre($newlivre3);
$biblio->afficherTousLesLivres();
$biblio::getNombreLivre();