<?php
// https://docs.google.com/document/d/1i6ilpAEh6QFZUulvtobaMUqfufRCcqmXhi2fJ1Z3RPQ/edit?tab=t.0


// Challenge 1 — Système de Jeu de Combat Tour par Tour

interface Compbbatant11
{
    public function attaquer(): int;
    public function subirDegats(int $degats): void;
    public function estVivant(): bool;
}

abstract class Persosnnage implements Compbbatant11
{
    protected $nom;
    protected $vie;
    protected $force;

    public function __construct($nom, $vie, $force)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->force = $force;
    }
    public function afficherStatus()
    {
        echo "{$this->nom}{$this->vie}{$this->force}";
    }
}


class Guerrier11 extends Persosnnage
{


    public function __construct($nom, $vie, $force)
    {
        parent::__construct($nom, $vie, $force);
    }

    public function attaquer(): int
    {
        return $this->force;
    }
    public function subirDegats(int $degats): void
    {
        $this->vie -= $degats;
    }
    public function estVivant(): bool
    {
        return $this->vie > 0;
    }
}

class Mage11 extends Persosnnage
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
    }
    public function estVivant(): bool
    {
        return $this->vie > 0;
    }
}


$gue = new Guerrier11("gueriire", 10, 20);
$mag = new Mage11("mag", 4, 10);

$gue->subirDegats(1000);


// Challenge 2 — Système Bancaire Orienté Objet


abstract class CompteBancaire111
{
    protected $titulaire;
    protected $solde;

    public function __construct($titulaire, $solde)
    {
        $this->solde = $solde;
        $this->titulaire = $titulaire;
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
    abstract public function calculerInteret();
}


class CompteCourant11 extends CompteBancaire111
{


    public function __construct($titulaire, $solde)
    {
        parent::__construct($titulaire, $solde);
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
    public function calculerInteret()
    {
        return 0;
    }
}

class CompteEpargne11 extends CompteBancaire111
{


    public function __construct($titulaire, $solde)
    {
        parent::__construct($titulaire, $solde);
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
    public function calculerInteret()
    {
        return $this->solde * 0.03;
    }
}


class Banka
{
    public $stock = [];
    public static $nbr = 0;

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function ajouterComptes(CompteBancaire111 $compte)
    {
        $this->stock[] = $compte;
        self::$nbr++;
    }

    public function Affichersoldes()
    {
        foreach ($this->stock as $account) {
            $account->afficherSolde();
        }
    }

    public function applyinteret()
    {
        foreach ($this->stock as $comptes) {
            if ($comptes instanceof CompteEpargne11) {
                $interet = $comptes->calculerInteret();
                $comptes->deposer($interet);
            }
        }
        // return $interet;
    }
}


// Challenge 3 — Gestion de Bibliothèque

class  LivreTAYEB
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

    public function emprunter()
    {
        return $this->disponible = false;
    }
    public function rendre()
    {
        return $this->disponible = true;
    }
    public function afficherInfos()
    {
        echo "{$this->auteur}{$this->titre}{$this->disponible}";
    }
}


class Utilisatuerss
{
    public $nom;
    public $emprunts = [];

    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function emprunterLivre(LivreTAYEB $livre)
    {
        $this->emprunts[] = $livre;
    }
    public function rendreLivre(LivreTAYEB $livre)
    {
        $bookchercher = array_search($livre, $this->emprunts);
        unset($this->emprunts[$bookchercher]);
        $livre->rendre();
    }

    public function afficherEmprunts()
    {
        foreach ($this->emprunts as $book) {
            $book->afficherInfos();
        }
    }
}





// Challenge 4 — Système de Facturation avec Logger



interface Facturable11
{
    public function calculerTotal(): float;
}

trait LoggerPrTrait
{
    public function logAction(string $message)
    {
        echo "{$message}";
    }
}

class  Produit11 implements Facturable11
{
    public $nom;
    public $prixUnitaire;
    public $quantite;

    use LoggerPrTrait;
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


class Facture11
{
    public $liste = [];
    function ajouterProduit(Produit11 $p)
    {
        $this->liste[] = $p;
    }
    function calculerMontantTotal(){
        $sum=0;
        foreach ($this->liste as $prod) {
$sum+=$prod->calculerTotal();
        }
        return $sum;
    }



}
