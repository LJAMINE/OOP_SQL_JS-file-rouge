<?php

// Context: You're building a system to manage a library's collection, including different types of media: Books, Magazines, and DVDs.

// 🧩 What to implement:
// Create an abstract class LibraryItem with abstract methods: addItem(), updateItem(), deleteItem(), getItemInfo().

// Create subclasses: Book, Magazine, and DVD, each extending LibraryItem, implementing methods differently (👉 polymorphism).

// Each subclass has its own unique properties:

// Book: author, page count

// Magazine: issue number, publisher

// DVD: duration, director

// Use a protected array to store the items (👉 encapsulation).

// Implement a getTotalItems() method.

// Demonstrate abstraction by defining method signatures in the abstract class that are implemented by all subclasses.

// Add a displayInfo() method that returns formatted information about the item — overridden in each subclass.



// abstract class Librerayayman--------------------------------------------------------
// {
//     protected $store = [];



//     abstract public function addItem($item);
//     abstract public function updateItem($index, $item);
//     abstract public function deleteItem($index);
//     abstract public function getItemInfo($index);
//     abstract public function displayInfo();
// }

// class BookAyman extends Librerayayman
// {

//     public $author;
//     public $page;
//     public function addItem($item)
//     {

//         $this->store[] = [
//             'author' => $item['author'],
//             'page' => $item['page'],
//         ];
//     }
//     public function updateItem($index, $item)
//     {
//         if (isset($this->store[$index])) {
//             $this->store[$index] = $item;
//         }
//     }
//     public function deleteItem($index)
//     {
//         if (isset($this->store[$index])) {
//             unset($this->store[$index]);
//         }
//     }
//     public function getItemInfo($index) {
//         return $this->store[$index] ;
//     }
//     public function getTotalItems() {}
//     public function displayInfo() {}
// }



// Challenge 1 — Système de Jeu de Combat Tour par Tour--------------------------------------------------
// Objectif :
//  Créer un mini système de combat entre un Guerrier et un Mage.
// Spécifications :
// Créer une interface Combattant :

// public function attaquer(): int;
// public function subirDegats(int $degats): void;
// public function estVivant(): bool;


// Créer une classe abstraite Personnage avec :


// Attributs : nom, vie, force


// Méthode afficherStatut()


// Constructeur pour initialiser


// Créer deux classes concrètes :


// Guerrier : attaque brute basée sur force


// Mage : attaque magique basée sur force * 1.5


// Implémenter un combat tour par tour jusqu’à ce qu’un des personnages meure.





interface Combattant
{
    public function attaquer(): int;
    public function subirDegats(int $degats): void;
    public function estVivant(): bool;
}


abstract class PersonnageChallenge implements Combattant
{
    public string $nom;
    public int  $vie;
    public int $force;


    public function __construct($nom, $force, $vie)
    {
        $this->nom = $nom;
        $this->force = $force;
        $this->vie = $vie;
    }
    public function afficherStatut()
    {
        echo "{$this->nom}{$this->vie}{$this->force}";
    }
    public function estVivant(): bool
    {
        return $this->vie > 0;
    }
}
class Guerrier extends PersonnageChallenge
{

    public function __construct($nom, $vie, $force)
    {

        parent::__construct($nom, $force, $vie);
    }
    public function attaquer(): int
    {
        return $this->force;
    }
    public function subirDegats(int $degats): void
    {
        $this->vie -= $degats;
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }
}

class Mage extends PersonnageChallenge implements Combattant
{

    public function __construct($nom, $vie, $force)
    {

        parent::__construct($nom, $vie, $force);
    }
    public function attaquer(): int
    {
        return $this->force * 1.5;
    }
    public function subirDegats(int $degats): void
    {
        $this->vie -= $degats;
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }
}







// Challenge 2 — Système Bancaire Orienté Objet------------------------------------------------------
// Objectif :
//  Créer un système de comptes bancaires (courant + épargne).
// Spécifications :
// Créer une classe abstraite CompteBancaire avec :


// Attributs : titulaire, solde


// Méthodes :


// deposer(float $montant)


// retirer(float $montant)


// afficherSolde()


// Méthode abstraite calculerInteret(): float


// Créer deux classes :


// CompteCourant (pas d’intérêts)


// CompteEpargne (intérêts 3%)


// Créer une classe Banque capable de :


// Ajouter des comptes


// Afficher les soldes


// Appliquer les intérêts aux comptes épargne






abstract class CompteBancaireAyman
{
    public $titulaire;
    public $solde;

    public function __construct($titulaire, $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }
    public function deposer(float $montant)
    {
        $this->solde += $montant;
    }
    public function retirer(float $montant)
    {
        $this->solde -= $montant;
    }
    public function afficherSolde()
    {
        return  $this->solde;
    }

    abstract public function calculerInteret(): float;
}


class CompteCourant extends CompteBancaireAyman
{
    public function __construct($titulaire, $solde)
    {
        parent::__construct($titulaire, $solde);
    }
    public function calculerInteret(): float
    {
        return 0;
    }
}

class CompteEpargne extends CompteBancaireAyman
{
    public function __construct($titulaire, $solde)
    {
        parent::__construct($titulaire, $solde);
    }
    public function calculerInteret(): float
    {
        return $this->solde * 2;
    }
}

class BanqueAyman
{
    public $stock = [];

    public function Ajouter(CompteBancaireAyman $compteBancaire)
    {
        $this->stock[] = $compteBancaire;
    }

    public function afficherSolde()
    {
        foreach ($this->stock as $item) {
            echo    $item->afficherSolde();
        }
    }

    public function AppliquerInterteEPa()
    {

        foreach ($this->stock as $compte) {
            if ($compte instanceof CompteEpargne) {
                $value = $compte->calculerInteret();
                $compte->deposer($value);
            }
        }
    }
}


$CompteCourant = new CompteCourant("amine", 10);
$CompteEpargne = new CompteEpargne("said", 20);

$banque = new BanqueAyman();
$banque->Ajouter($CompteCourant);
$banque->Ajouter($CompteEpargne);

($banque->afficherSolde());


$banque->AppliquerInterteEPa();
($banque->afficherSolde());



// Challenge 3 — Gestion de Bibliothèque-----------------------------------------------------------------
// Objectif :
//  Créer un mini système d’emprunt de livres.
// Spécifications :
// Créer une classe Livre avec :


// Attributs : titre, auteur, disponible


// Méthodes :


// emprunter()


// rendre()


// afficherInfos()


// Créer une classe Utilisateur avec :


// Attributs : nom, emprunts (tableau de livres)


// Méthodes :


// emprunterLivre(Livre $livre)


// rendreLivre(Livre $livre)


// afficherEmprunts()


// Cas d’usage :


// Créer 3 livres, 2 utilisateurs


// Effectuer des emprunts/rendus


// Afficher l’historique




class LivreAZIZ
{
    protected $titre;
    protected $auteur;
    protected $disponible;

    public function __construct($titre, $auteur)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->disponible = true;
    }

    public function getdisponiblity()
    {
        return $this->disponible;
    }
    public function emprunter()
    {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }
    public function rendre()
    {
        $this->disponible = true;
    }
    public function afficherInfos()
    {
        echo "{$this->titre}{$this->auteur}";
    }
}

class UtilisateurAZIZ
{
    public $nom;
    public $emprunts = [];
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function emprunterLivre(LivreAZIZ $livre)
    {
        $this->emprunts[] = $livre;
    }
    public function rendreLivre(LivreAZIZ $livre)
    {
        $livrechercher = array_search($livre, $this->emprunts);

        if ($livrechercher !== false) {

            unset($this->emprunts[$livrechercher]);
            $livre->rendre();
        }
    }
    public function afficherEmprunts()
    {
        foreach ($this->emprunts as $live) {
            $live->afficherInfos();
        }
    }
}



// Challenge 4 — Système de Facturation avec Logger
// Objectif :
//  Créer un système de facturation avec journalisation.
// Spécifications :
// Créer une interface Facturable :

//  public function calculerTotal(): float;

// Créer un trait LoggerTrait :

//  public function logAction(string $message)

// Créer une classe Produit :


// Attributs : nom, prixUnitaire, quantite


// Implémente Facturable


// Utilise LoggerTrait pour loguer les actions


// Créer une classe Facture avec :


// Liste de produits


// Méthodes :


// ajouterProduit(Produit $p)


// calculerMontantTotal()


interface Facturable
{
    public function calculerTotal(): float;
}

trait LoggerTrait
{
    public function logAction(string $message)
    {
        echo "[LOG] " . $message . PHP_EOL;
    }
}

class ProduitAZIZZ implements Facturable
{
    protected $nom;
    protected $prixUnitaire;
    protected $quantite;
    use LoggerTrait;

    public function __construct($nom, $prixUnitaire, $quantite)
    {
        $this->nom = $nom;
        $this->prixUnitaire = $prixUnitaire;
        $this->quantite = $quantite;
    }
    public function calculerTotal(): float
    {
        return $this->prixUnitaire * $this->quantite;
    }
}

class FactureAZIZIZ
{

    public $newstock = [];
    public $sum=0;
    public function ajouterProduit(ProduitAZIZZ $p)
    {
        $this->newstock[] = $p;
    }

    public function calculerMontantTotal()
    {
        foreach ($this->newstock as $prod) {
            $this->sum += $prod->calculerTotal();
        }
        return $this->sum;
    }
}
