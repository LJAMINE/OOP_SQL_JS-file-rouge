<?php
// 🔹 Niveau 1 : Débutant (Classes, objets et instances)


class LivreLast
{
    public $titre;
    public $auteur;
    public $anneePublication;
    public $listLivrearray = [];
    public $disponible = true;

    public function __construct($titre, $auteur, $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
    }

    public function afficher()
    {
        echo " {$this->titre}{$this->auteur}{$this->anneePublication} ";
    }

    public function emprunter()
    {
        if ($this->disponible) {
            $this->disponible = false;
            echo "the livre is {$this->titre} emprunter ";
        } else {
            echo "the livre is {$this->titre} disponible ";
        }
    }
    public function retourner()
    {
        if ($this->disponible) {
            $this->disponible = true;
            echo "the livre is {$this->titre} disponible ";
        } else {
            echo "the livre is {$this->titre} emprunter ";
        }
    }
}


$new = new LivreLast("sa3ada", "bro code", "1234");
$new2 = new LivreLast("hahahaha", "akakaka", "1234");
// $new->emprunter();
// $new->retourner();


class BibliothequeLast
{
    private static $livres = [];
    private static $nombreLivres=0;
    public function ajouterLivre(LivreLast $livre)
    {
        self::$livres[] = $livre;
        self::$nombreLivres++;
    }
    public function afficherTousLesLivres()
    {
        foreach (self::$livres as $item) {
            print_r($item);
        }
    }
    public function getNombreLivres(){
        echo self::$nombreLivres;
    }
}

$let=new BibliothequeLast();
$let->ajouterLivre($new);
$let->ajouterLivre($new2);

$let->afficherTousLesLivres();
$let->getNombreLivres();

