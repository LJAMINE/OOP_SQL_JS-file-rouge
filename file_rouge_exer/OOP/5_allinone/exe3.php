<?php
// Système de Gestion d'Entreprise (ERP) en POO



interface EmployeInterface12
{
    public function afficherDetails();
    public function calculerSalaire();
}


class Employe12 implements EmployeInterface12
{
    public  string $nom;
    public string $prenom;
    public string $dateEmbauche;
    public string $departement;
    public float $salaireBase;

    public  function __construct($nom, $prenom, $dateEmbauche, $departement, $salaireBase)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->departement = $departement;
        $this->salaireBase = $salaireBase;
    }

    public function afficherDetails()
    {
        echo "{$this->nom}{$this->prenom}{$this->departement}";
    }
    public function calculerSalaire()
    {
        echo $this->salaireBase * 2;
    }

    public function __tostring()
    {
        return " nom est {$this->nom} salaire est {$this->salaireBase}";
        // return "Nom: {$this->nom}, Salaire: {$this->salaireBase}€";

    }
}

$newemploye1 = new Employe12("hmidoch", "med", "12-12-1234", "barcelona", 12);
$newemploye2 = new Employe12("said", "ahahha", "12-12-1234", "real", 2);
// $newemploye->afficherDetails();
// $newemploye->calculerSalaire();
//  echo $newemploye->__tostring();


class Manager321 extends Employe12
{
    public $equipe = [];


    // public function __construct($nom, $prenom, $dateEmbauche, $departement, $salaireBase){
    //     parent::__construct($nom, $prenom, $dateEmbauche, $departement, $salaireBase);
    // }

    public function ajouterEmploye(Employe12 $employe)
    {
        $this->equipe[] = $employe;
    }

    public function afficherEquipe()
    {

        foreach ($this->equipe as $employ) {
            $employ->afficherDetails();
        }
    }

    public function calculerSalaire()
    {
        parent::calculerSalaire();
    }
}

$manager = new Manager321("manager", "med", "12-12-1234", "barcelona", 10);
$manager->ajouterEmploye($newemploye1);
$manager->ajouterEmploye($newemploye2);

// $manager->afficherEquipe();

// $manager->calculerSalaire();


// $clonemanager=clone $manager;
// echo "clonage de manager est complet";


// $clonemanager->afficherEquipe();


class Departement
{
    public $nom;
    public $budget;
    public Manager321 $responsable;

 

    public function __construct($budget,$nom,Manager321 $responsable)
    {
        $this->budget = $budget;
        $this->nom = $nom;
        $this->responsable = $responsable;
    }
    public function afficherDepartement()
    {
        echo "{$this->nom}{$this->budget}{$this->responsable}";
    }

    public function ajouterBudget($montant)
    {
      echo  $this->budget += $montant;
    }


}
$depart=new Departement(10,"amp",$manager);
$depart->afficherDepartement();
$depart->ajouterBudget(10);



trait GestionProjets{
    
    private array $projets = [];

    public function demarrerProjet($nomProjet){
        if (!isset($this->projets[$nomProjet])) {
            $this->projets[$nomProjet] = "En cours";
            echo " Projet '{$nomProjet}' démarré avec succès !\n";
        } else {
            echo "Le projet '{$nomProjet}' est déjà en cours.\n";
        }

    }
   public function terminerProjet($nomProjet){
    if (isset($this->projets[$nomProjet]) && $this->projets[$nomProjet] === "En cours") {
        $this->projets[$nomProjet] = "Terminé";
        echo "Projet '{$nomProjet}' terminé avec succès !\n";
    } else {
        echo "Impossible de terminer le projet '{$nomProjet}'. Vérifiez son statut.\n";
    }
   }
   
   
   public function afficherProjets(): void
   {
       if (empty($this->projets)) {
           echo "Aucun projet en cours pour ce département.\n";
           return;
       }

       echo " Liste des projets du département :\n";
       foreach ($this->projets as $nom => $statut) {
           echo "🔹 {$nom} : {$statut}\n";
       }
       echo "\n";
   }
}