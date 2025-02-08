<?php
abstract class Personne
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    abstract public function pres();
}

class Lecteur extends Personne
{

    public $livresEmpruntes = [];
    public function pres()
    {
        echo "Je suis {$this->nom}, un lecteur de {$this->age} ans";
    }

    public function emprunterLivre($livre)
    {
        $this->livresEmpruntes[] = $livre;
    }
    public function retournerLivre($livre)
    {

        $book = array_search($livre, $this->livresEmpruntes);

        if ($book) {
            unset($this->livresEmpruntes[$book]);
        } else {
            echo "no book is found";
        }
    }

    public  function afficherEmprunts()
    {
        foreach ($this->livresEmpruntes as $books) {
            echo $books;
        }
    }
}


class Bibliothecaire extends Personne
{

    public $special;
    public $listeLecteurs = [];
    public static $nombreLecteurs = 0;
    public function pres()
    {
        echo "Je suis {$this->nom}, un bibliothécaire qui gère la bibliothèque";
    }

    public function inscrireLecteur(Lecteur $lecteur)
    {
        $this->listeLecteurs[] = $lecteur;
        self::$nombreLecteurs++;
    }
    public function afficherLecteurs()
    {
        foreach ($this->listeLecteurs as $key) {
           $key->pres();
        }
    }
}


class ResponsableBibliotheque  extends Bibliothecaire{
    public function sepre(){
        parent::pres();
         echo "Je suis {$this->nom}, un bibliothécaire supervise toute la gestion ";

    }
}
$bookss = new Lecteur("amine", 13);
$bookss2 = new Lecteur("said", 22);
$bookss3 = new Lecteur("aaaa", 22);

$beblio=new Bibliothecaire("zor",120);
$beblio->inscrireLecteur($bookss);
$beblio->inscrireLecteur($bookss2);
$beblio->inscrireLecteur($bookss3);
$beblio->afficherLecteurs();
// $bookss->emprunterLivre("book1");
// $bookss->emprunterLivre("book2");
// $bookss->emprunterLivre("book3");
// $bookss->retournerLivre("book2");
echo $beblio::$nombreLecteurs;
$bookss->afficherEmprunts();
