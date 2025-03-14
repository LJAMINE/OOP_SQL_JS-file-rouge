<?php
abstract class Personne33
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }
    abstract public function sepress();
}

class Lectreur333 extends Personne33
{

    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }
    public $livresempruntes = [];

    public function sepress()
    {
        echo "Je suis [nom], un lecteur de [âge] ans.";
    }
    public function __tostring()
    {
        return  "Je suis {$this->nom} , un lecteur de {$this->age}  ans.";
    }

    public  function emprunterLivre($livre)
    {

        $this->livresempruntes[] = $livre;
    }

    public  function retournerLivre($livre)
    {

        $index = array_search($livre, $this->livresempruntes);

        if ($index !== false) {

            unset($this->livresempruntes[$index]);
        }
    }

    public function afficherEmprunts()
    {
        foreach ($this->livresempruntes as $book) {

            echo $book;
        }
    }
}


$lecteur = new Lectreur333("abo", "12");
$lecteur2 = new Lectreur333("said", "12");
$lecteur->emprunterLivre("amine");
$lecteur->emprunterLivre("azer");
$lecteur->retournerLivre("azer");
// $book->retournerLivre("amine");

$lecteur->afficherEmprunts();



class Bibliothecaire33333 extends Personne33
{

    public function sepress()
    {
        echo "Je suis [nom], un lecteur de [âge] ans.";
    }

    public $speciality;
    public $lisetLecteur = [];
    public static $nbrlecteur = 0;

    public function inscrireLecteur(Lectreur333 $lecteur)
    {

        $this->lisetLecteur[] = $lecteur;
    }

    public function afficheLecteur()
    {
        foreach ($this->lisetLecteur as $lectur) {
            echo $lectur;
        }
    }
}


$biblio=new Bibliothecaire33333("biblio","100");
$biblio->inscrireLecteur($lecteur);
$biblio->inscrireLecteur($lecteur2);

$biblio->afficheLecteur();


