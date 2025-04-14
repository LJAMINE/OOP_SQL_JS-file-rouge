<?php

// Définition de la classe Employe
class EmployeErrors {
    protected $nom;
    protected $prenom;
    protected $age;
    protected $salaireBase;

    // Constructeur
    public function __construct($nom, $prenom, $age, $salaireBase) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->$age = $age;
        $this->salaireBase = $salaireBase;
    }

    // Méthode pour afficher les détails de l'employé
    public function afficherDetails() {
        echo "Nom : $this->nom\n";
        echo "Prénom : $this->prenom\n";
        echo "Âge : $this->age\n";
        echo "Salaire de base : $this->salaireBase\n";
    }

    // Méthode pour calculer le salaire
    public function calculerSalaire() {
        $primeAnciennete = 1000;
        return $this->salaireBase + $primeAnciennete;
    }
}

// Définition de la classe Manager (hérite de Employe)
class ManagerErrors extends EmployeErrors {
    public $equipe=[];

    // Constructeur de Manager
    public function __construct($nom, $prenom, $age, $salaireBase, $equipe = []) {
        parent::__construct($nom, $prenom, $age, $salaireBase);
        $this->equipe = $equipe;
    }

     

    // Méthode pour afficher les employés de l'équipe
    public function afficherEquipe() {
        echo "Équipe du manager {$this->nom} {$this->prenom }: \n";
        foreach ($this->equipe as $employe) {
            echo $employe->afficherDetails() . "\n";
        }
    }
}

// Création d'un Employé
$employe1 = new EmployeErrors("Dupont", "Jean", 35, 2500);
$employe2 = new EmployeErrors("Martin", "Claire", 28, 2200);

// Création d'un Manager et ajout d'employés dans son équipe
$manager = new ManagerErrors("Lemoine", "Paul", 45, 4000);
$manager->equipe[] = $employe1;
$manager->equipe[] = $employe2;

// Affichage des détails de l'employé
$employe1->afficherDetails();

// Affichage des employés sous la supervision du manager
$manager->afficherEquipe();

// Calcul du salaire du manager
echo "Salaire du manager : " . $manager->calculerSalaire() . "\n";

?>