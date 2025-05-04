<?php
// abstract class AccountRead
// {
//     private string $accountNumber;
//     protected float $balance;

//     public function __construct($accountNumber, $balance)
//     {
//         $this->accountNumber = $accountNumber;
//         $this->balance = $balance;
//     }

//     public function deposit($amount)
//     {
//         if ($amount > 0) {
//             $this->balance += $amount;
//         }
//     }
//     public function withdraw($amount)
//     {
//         if ($this->balance < $amount) {
//             $this->balance -= $amount;
//         }
//     }
//     public function getaccountNumber()
//     {
//         return $this->accountNumber;
//     }
//     public function getBalance()
//     {
//         return $this->balance;
//     }

//     abstract public function getAccountType();
// }


// class SavingsAccountRead extends AccountRead
// {


//     private float $interestRate;


//     public function __construct($accountNumber, $balance, $interestRate)
//     {
//         parent::__construct($accountNumber, $balance);
//         $this->interestRate = $interestRate;
//     }
//     public function getAccountType()
//     {
//         echo "this saving account";
//     }
//     public function applyInterest()
//     {
//         return  $this->getBalance() * 0.3;
//     }
// }


// class CurrentAccount extends AccountRead {
//     private float $overdraftLimit ;


//     public function __construct($accountNumber, $balance, $overdraftLimit )
//     {
//         parent::__construct($accountNumber, $balance);
//         $this->overdraftLimit  = $overdraftLimit ;
//     }
//     public function getAccountType()
//     {
//         echo "this current  account";
//     }
//     public function withdraw($amount){
//         if ($amount<$this->balance+$this->overdraftLimit) {
//             $this->balance -= $amount;
//         }



//     }
// }





// ✅ Challenge 6 — Système de Réservation de Vols---------------

class Vol
{
    protected $distination;
    protected $date;
    protected $nbrplace;

    public function __construct($distination, $date, $nbrplace)
    {
        $this->distination = $distination;
        $this->date = $date;
        $this->nbrplace = $nbrplace;
    }
    public function reserverPlace()
    {
        $this->nbrplace--;
    }
    public function getDestination(): string
    {
        return $this->distination;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getPlacesDisponibles(): int
    {
        return $this->nbrplace;
    }
    public function __tostring()
    {
        return " {$this->date} ({$this->nbrplace}";
    }
}

class Utilisateur
{
    protected $nom;
    protected $email;
    protected $listeréservations = [];
    public function __construct(string $nom, string $email)
    {
        $this->nom = $nom;
        $this->email = $email;
    }
    public function reserverVol(Vol $vol)
    {
        $vol->reserverPlace();
        $reservation = new Reservation($this, $vol);
        $this->listeréservations[] = $reservation;
    }
}

class Reservation
{
    public  Utilisateur $users;
    public  Vol $vol;
    public function __construct(Utilisateur $users, Vol $vol)
    {
        $this->users = $users;
        $this->vol = $vol;
    }

    public function __tostring()
    {
        return '';
    }
}



// ✅ Challenge 7 — Système de Notifications Multicanal



interface CanSendNotification
{
    public function send(string $message, string $to): void;
}


class EmailNotifier implements CanSendNotification
{
    public function send(string $message, string $to): void
    {
        echo "this email {$message}";
    }
}

class SMSNotifier implements CanSendNotification
{
    public function send(string $message, string $to): void
    {
        echo "this sms {$message}";
    }
}
class SlackNotifier implements CanSendNotification
{
    public function send(string $message, string $to): void
    {
        echo "this slack {$message}";
    }
}


class NotificationService
{
    public $canSendNotification;
    public function __construct(CanSendNotification $canSendNotification)
    {
        $this->canSendNotification = $canSendNotification;
    }

    public function notify($message, $to)
    {
        $this->canSendNotification->send($message, $to);
    }
}



// $email = new NotificationService(new EmailNotifier());
// $email->notify("heello how are you", "@gmail.amine");



// ✅ Challenge 8 — Gestion de Parc Automobile


abstract class Vehcule
{

    readonly protected string $immatriculation;

    protected $marque;
    protected $modèle;
    protected $carburant;

    public function __construct($marque, $modèle, $carburant, $immatriculation)
    {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->carburant = $carburant;
        $this->immatriculation = $immatriculation;
    }

    abstract public function getType();
}

class VVoiture extends Vehcule implements Reparable

{
    public function __construct($marque, $modèle, $carburant, $immatriculation)
    {
        parent::__construct($marque, $modèle, $carburant, $immatriculation);
    }

    public function getType()
    {
        echo "this is voiture";
    }
    public function reparer(): void
    {
        echo "🔧 Voiture réparée\n";
    }
}
class CCamion extends Vehcule implements Reparable
{
    public function __construct($marque, $modèle, $carburant, $immatriculation)
    {
        parent::__construct($marque, $modèle, $carburant, $immatriculation);
    }
    public function getType()
    {
        echo "this is camion";
    }
    public function reparer(): void
    {
        echo "🔧 CCamion réparée\n";
    }
}

interface Reparable
{
    public function reparer(): void;
}

class Garage
{
    public $listeVehicle = [];

    public function ajouterVehicule(Vehcule  $vehicule)
    {
        $this->listeVehicle[] = $vehicule;
    }
    public function afficherParType()
    {
        foreach ($this->listeVehicle as $vehicle) {
            $vehicle->getType();
        }
    }
    public function reparerTous() {}
}


// $garage = new Garage();

// $v1 = new VVoiture("Toyota", "Corolla", "Essence", "ABC123");
// $v2 = new CCamion("Renault", "Maxity", "Diesel", "DEF456");

// $garage->ajouterVehicule($v1);
// $garage->ajouterVehicule($v2);
// $garage->ajouterVehicule($v3);

// $garage->afficherParType();
// $garage->reparerTous();



// ✅ Challenge 9 — Système de Suivi de Tâches



class Tache
{
    private $titre;
    private $statut;
    // private $titre;
    protected Utilisatuer $utilisatuer;

    public function __construct($titre, $statut = "a faire")
    {
        $this->titre = $titre;
        $this->statut = $statut;
    }
    public function changerStatus($newStatus)
    {
        $this->statut = $newStatus;
    }
    public function assignerUtilisateur(Utilisatuer $u): void
    {
        $this->utilisatuer = $u;
    }
}

class Project
{
    protected $nom;
    protected $tableauTache = [];
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterTache(Tache $tache)
    {
        $this->tableauTache[] = $tache;
    }
    public function affcihage()
    {
        foreach ($this->tableauTache as $key) {
            print_r($key);
        }
    }
}

class Utilisatuer
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function __tostring()
    {
        return $this->nom;
    }
}



class Boards
{
    protected $projects = [];

    public function ajouterProjects(Project $pro)
    {
        $this->projects[] = $pro;
    }

    public function affcihageProjects()
    {
        foreach ($this->projects as $key) {
            $key->affcihage();
        }
    }
}



// $board=new Boards();

// $util=new Utilisatuer("amine");
// $util2=new Utilisatuer("saida");
// $project=new Project('site web');

// $t1=new Tache("creear design");
// $t1=new Tache("creear header");

// $t1->assignerUtilisateur($util);
// $t1->assignerUtilisateur($util2);

// $t1->changerStatus("en cours");

// $project->ajouterTache($t1);

// $board->ajouterProjects($project);
// $board->affcihageProjects();


// ✅ Challenge 10 — Système de Gestion de Notes Étudiantes


class EtudiantAmine
{
    protected $nom;
    protected $prenom;
    protected $tableMatiere = [];

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function ajouterMatier(Matiere $matier)
    {
        $this->tableMatiere[] = $matier;
    }
    public function getMatiere()
    {
        return $this->tableMatiere;
    }
}

class Matiere
{
    protected $nom;
    protected $tableNote = [];
    public $sum = 0;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterNote($note)
    {
        $this->tableNote[] = $note;
    }
    public function getNote()
    {
        return $this->tableNote;
    }

    public function calculerMoyenne()
    {
        foreach ($this->tableNote as $note) {
            $this->sum += $note / count($this->tableNote);
        }
        return $this->sum;
    }
    public function estValidee(): bool
    {
        return $this->calculerMoyenne() >= 10;
    }
}

class BulletIn
{
    protected EtudiantAmine $etudiant;
    public function __construct(EtudiantAmine $etudiant)
    {
        $this->etudiant = $etudiant;
    }

    public function afficherResultat()
    {
        echo " {$this->etudiant} ";
        foreach ($this->etudiant->getMatiere() as $matier) {
            echo $matier;
        }
    }
}



// ✅ Challenge 11 — Système de Gestion de Recettes de Cuisine

class Recette
{
    protected $nom;
    protected  $ingredient = [];
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getName()
    {
        return $this->nom;
    }

    public function ajouterIngredient(Ingredient $i)
    {
        $this->ingredient[] = $i;
    }
    public function afficherRecette()
    {
        foreach ($this->ingredient as $key) {
            print_r($key);
        }
    }
}


class Ingredient
{
    protected $nom;
    protected $quantité;
    protected $unité;

    public function __construct($nom, $quantité, $unité)
    {
        $this->nom = $nom;
        $this->quantité = $quantité;
        $this->unité = $unité;
    }
    public function __tostring()
    {
        return "{$this->nom}{$this->quantité}{$this->unité}";
    }
}

class LivreCuisine
{
    public $listeRecette = [];
    public function ajouterRecette(Recette $recette)
    {
        $this->listeRecette[] = $recette;
    }
    public function rechercherParNom($nom)
    {
        foreach ($this->listeRecette as $recette) {

            $recettechercher = array_search($nom, $recette->getName());
            return $recettechercher;
        }
    }
}



// ✅ Challenge 12 — Gestion de Contrats de Travail


class Employyyes
{
    public $nom;
    public $fonction;

    public function __construct($nom, $fonction)
    {
        $this->nom = $nom;
        $this->fonction = $fonction;
    }
}
abstract class Contrract
{

    protected Employyyes $employyyes;
    public readonly DateTime $dateDebut;

    public function __construct(Employyyes $employyyes, $dateDebut)
    {
        $this->employyyes = $employyyes;
        $this->dateDebut = $dateDebut;
    }
    abstract public function calculerSalaire();
}
class ContratCDI extends Contrract
{

    public $salaire;
    public function __construct($employyyes, $dateDebut, $salaire)
    {
        parent::__construct($employyyes, $dateDebut);
        $this->salaire = $salaire;
    }

    public function calculerSalaire()
    {
        return $this->salaire;
    }
}
class ContratCDD extends Contrract
{
    public $salaire;
    private int $heures;

    public function __construct($employyyes, $dateDebut, $salaire, $heures)
    {
        parent::__construct($employyyes, $dateDebut);
        $this->salaire = $salaire;
        $this->heures = $heures;
    }

    public function calculerSalaire()
    {
        return $this->salaire * $this->heures;
    }
}
class ContratFreelance extends Contrract
{


    public $montantMission;

    public function __construct($employyyes, $dateDebut, $salaire, $montantMission)
    {
        parent::__construct($employyyes, $dateDebut);
        $this->montantMission = $montantMission;
    }

    public function calculerSalaire()
    {
        return $this->montantMission;
    }
}


// ✅ Challenge 13 — Réseau Social Minimaliste


class Utilisateur13
{
    public $pseudo;
    public $listeDamis = [];
    private array $posts = [];


    public function __construct($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function ajouterAmi(Utilisateur13 $ami)
    {
        $this->listeDamis[] = $ami;
    }
    public function publierPost($contenu)
    {
        $post = new Post13($this, $contenu, new DateTime(), 12);
        $this->posts[] = $post;
        return $post;
    }

    public function afficherFilsACTUALITE()
    {
        foreach ($this->listeDamis as $ami) {
            foreach ($ami->getPosts() as $post) {
                $post->afficherPost();
            }
        }
    }
    public function getPosts(): array
    {
        return $this->posts;
    }
}

class Post13
{
    public Utilisateur13  $auteur;
    public $contenu;
    public $date;
    public $likes;
    private array $commentaires = [];
    

    public function __construct(Utilisateur13  $auteur, $contenu, $date, $likes)
    {
        $this->auteur = $auteur;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->likes = $likes;
    }
    public function Liker() {}
    public function afficherPost()
    {
        echo "{$this->auteur}{$this->contenu}{$this->date}{$this->likes}";
    }
    public function ajouterCommentaire(Commentaires $commentaire): void
{
$this->commentaires[]=$commentaire;
}}


class Commentaires
{
    public Utilisateur13 $auteur;
    public $contenu;
    public function __construct(Utilisateur13 $auteur, string $contenu)
    {
        $this->auteur = $auteur;
        $this->contenu = $contenu;
    }
    public function __toString(): string
    {
        return "{$this->auteur->pseudo} : {$this->contenu}";
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

}
