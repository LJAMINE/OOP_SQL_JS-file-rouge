<?php
abstract class PersoneLast
{
    protected string $nom;
    protected int $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    abstract public function sePrrsenter();
}

class Lecteurlast extends PersoneLast
{

    public $livresEmpruntes = [];
    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }
    public function sePrrsenter()
    {
        echo "Je suis {$this->nom}, un lecteur de {$this->age},ans.";
    }

    public function emprunterLivre($livre)
    {
        $this->livresEmpruntes[] = $livre;
    }
    public function retournerLivre($livre)
    {
        $livrechercher = array_search($livre, $this->livresEmpruntes);
        // echo  "aminektab";

        if ($livrechercher !== false) {
            unset($this->livresEmpruntes[$livrechercher]);
        }
    }
    public function afficherEmprunts()
    {
        foreach ($this->livresEmpruntes as $key) {
            echo $key;
        }
    }
    public function __toString()
    {
        return "lecteur {$this->nom}{$this->age} ans  ";
    }
}


$res = new Lecteurlast("amine", 54);
$res22 = new Lecteurlast("brayan", 54);
$res->emprunterLivre("aze");
$res->emprunterLivre("aaaaa");
$res->retournerLivre("aze");
$res->afficherEmprunts();



class Bibliothecairelast extends Lecteurlast
{
    public $speciality;
    public static $nombreLecteurs = 0;
    public $listeLecteurs = [];

    function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function inscrireLecteur(Lecteurlast $lecteur)
    {
        foreach ($this->listeLecteurs as $key) {
            if ($key === $lecteur) {

                echo "deja inscrit";
                return;
            }
        }
        $this->listeLecteurs[] = $lecteur;
        self::$nombreLecteurs++;
    }

    function afficherLecteurs()
    {
        foreach ($this->listeLecteurs as $item) {

            echo $item;
        }
    }



    public function __serialize()
    {
        return [
            'nom' => $this->nom,
            'age' => $this->age,
        ];
    }
}


$bib = new Bibliothecairelast("aiia", 12);
$bib->inscrireLecteur($res);
// $bib->inscrireLecteur($res);
$bib->inscrireLecteur($res22);

// $bib->afficherLecteurs();
// print_r($bib->__serialize());


class ResponsableBibliothequelast extends  Bibliothecairelast
{

    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }
    public function sePrrsenter()
    {
        parent::sePrrsenter();
    }
}

$resp = new ResponsableBibliothequelast("respon", 199);
// $resp->sePrrsenter();



// -------------------------------------------------------
// Système de Gestion d'Entreprise (ERP) en POO

interface EmployeInterfaceLast
{

    public function afficherDetails();
    public function calculerSalaire();
}

class EmployeLast
{
    public $nom;
    public $prenom;
    public $dateEmbauche;
    public $departement;
    public $salaireBase;

    public function __construct($nom, $prenom, $departement, $salaireBase)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->departement = $departement;
        $this->salaireBase = $salaireBase;
    }
    public function afficherDetails()
    {

        echo " {$this->nom}{$this->prenom}{$this->departement}";
    }
    public function calculerSalaire()
    {
        return $this->salaireBase * 0.5;
    }

    public function __tostring()
    {
        return "le nom est :{$this->nom} et saliare {$this->salaireBase} ";
    }
}


$employelast = new EmployeLast("aziz", "med", "maths", 12);
$employelast2 = new EmployeLast("bro", "safi", "bvb", 34);
// $employelast->afficherDetails();
// echo $employelast->calculerSalaire();
class ManagerLast extends EmployeLast
{
    public $equipe = [];

    public function __construct($nom, $prenom, $departement, $salaireBase)
    {
        parent::__construct($nom, $prenom, $departement, $salaireBase);
    }


    public function __clone()
    {
        $clonedequipe = [];

        foreach ($this->equipe as $item) {
            $clonedequipe[] = clone $item;
        }
        $this->equipe=$clonedequipe;
    }
    public function ajouterEmploye(EmployeLast $employe)
    {
        $this->equipe[] = $employe;
    }

    public function afficherEquipe()
    {
        foreach ($this->equipe as $item) {
            echo $item;
        }
    }

    public function calculerSalaire()
    {
        return $this->salaireBase * 0.5 + 10;
    }
}

$ManagerLast = new ManagerLast("manag", "azzzz", "english", 100);
// $ManagerLast->ajouterEmploye($employelast);
// $ManagerLast->ajouterEmploye($employelast2);
// $ManagerLast->afficherEquipe();



class DepartmemntLast
{
    public $nom;
    public $budget;
    public ManagerLast $responsable;

    public function __construct($nom,$budget,ManagerLast $responsable){
        $this->nom=$nom;
        $this->budget=$budget;
        $this->responsable=$responsable;
    }

    public function afficherDepartement()
    {
        echo " departement  {$this->nom}{$this->budget} ";
        echo " responasble  {$this->responsable->nom}{$this->responsable->prenom} ";
    }
    public function ajouterBudget($montant)
    {
        echo   $this->budget += $montant;
    }
}

$departements = new DepartmemntLast("dupont",133,$ManagerLast);
$departements->ajouterBudget(20);
// $departements->ajouterBudget(20);
$departements->afficherDepartement();
