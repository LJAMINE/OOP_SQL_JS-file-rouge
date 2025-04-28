<?php

interface ReservableInterface44
{
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours): Reservation44;
}

abstract class Vehicule44
{
    protected int  $id;
    protected string $immatriculation;
    protected string $marque;
    protected string $modele;
    protected float $prixJour;
    protected  bool $disponible = true;
    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible)
    {

        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;
    }

    public function afficherDetails()
    {
        echo "{$this->immatriculation}{$this->marque}{$this->modele}{$this->prixJour}";
    }

    public function calculerPrix(int $jours): float
    {
        return $this->prixJour * $jours;
    }
    public function estDisponible(): bool
    {
        return $this->disponible;
    }
    abstract public function  getType(): string;
}

class Voiture44 extends Vehicule44  implements ReservableInterface44
{

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $nbPortes, $transmission)
    {
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }
    public $nbPortes;
    public $transmission;
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours): Reservation44
    {
        return new Reservation44($this,$client,  $dateDebut,  $nbJours);
    }
    public function  getType(): string
    {
        return "this is a voiture";
    }
    public function afficherDetails()
    {
        parent::afficherDetails();
        echo "{$this->nbPortes}{$this->transmission}";
    }
}

class Moto44 extends Vehicule44  implements ReservableInterface44
{
    public $cylindree;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $cylindree)
    {
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->cylindree = $cylindree;
    }
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours): Reservation44
    {
        return new Reservation44();
    }
    public function  getType(): string
    {
        return "this is a moto";
    }
    public function afficherDetails()
    {
        parent::afficherDetails();
        echo "{$this->nbPortes}{$this->transmission}";
    }
}


abstract class Personne44
{
    protected $nom;
    protected $prenom;
    protected $email;

    public function __construct($nom, $prenom, $email)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
    abstract public function  afficherProfil();
}


class Client44 extends Personne44
{

    public $numeroClient;
    public $reservations = [];

    public function __construct($nom, $prenom, $email, $numeroClient)
    {
        parent::__construct($nom, $prenom, $email);
        $this->numeroClient = $numeroClient;
    }
    public function  afficherProfil() {}
    public function  ajouterReservation(Reservation44 $r)
    {
        $this->reservations[] = $r;
    }
    public function  getHistorique()
    {
        return $this->reservations;
    }
}


class Agence44
{
    public $nom;
    public $ville;
    public $vehicules = [];
    public $clients  = [];

    public function __construct($nom, $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function  ajouterVehicule(Vehicule44 $v)
    {
        $this->vehicules[] = $v;
    }
    public function  rechercherVehiculeDisponible(string $type) {}
    public function  enregistrerClient(Client44 $c)
    {
        $this->clients[] = $c;
    }

    public function faireReservation(Client44 $client, ReservableInterface44  $v, DateTime $dateDebut, int $nbJours): Reservation44 {
        $reservation=$v->reserver($client,$dateDebut,$nbJours);
        $client->ajouterReservation($reservation);
        return $reservation;
    }
}

class Reservation44
{
    public Vehicule44 $vehicule44;
    public Client44 $client;
    public string $dateDebut;
    public int $nbJours;
    public  $statut ;

    public function __construct($vehicule44, $client, $dateDebut, $nbJours)
    {
        $this->vehicule44 = $vehicule44;
        $this->client = $client;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = 'confirmer';
    }

   

    public function calculerMontant()
    {
        return $this->vehicule44->calculerPrix($this->nbJours);
    }

    public function confirmer()
    {
        return $this->statut = "confirmée";
    }
    public function annuler()
    {
        return $this->statut = 'annulée';
    }
}


trait LoggerTrait
{
    public function logAction(string $message)
    {
        echo "{$this->message}";
    }
}




$agenceParis=new Agence44("paris123","paris");
$agencecasa=new Agence44("casab","casablance");

$voit1=new Voiture44(1,"amam","amama","aallaa",1.2,true,123,"amamaa");
$mo2t=new Voiture44(2,"mot","mot","mot",1.2,true,123,"mot");


$agencecasa->ajouterVehicule($voit1);
$agenceParis->ajouterVehicule($mo2t);

$client1=new Client44("amine","lm","amine@gmil.com",123);
$client2=new Client44("aziz","lm","aziz@gmil.com",123);

$agenceParis->enregistrerClient($client1);
$agencecasa->enregistrerClient($client2);

$reservation=new Reservation44($voit1,$client1,"12-12-2028",12);
$reservation->confirmer();
$reservation->annuler();