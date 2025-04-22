<?php

interface ReservableInterface
{


    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours);
}



abstract class Vehicule44
{
    protected int  $id;
    protected string $immatriculation;
    protected string $marque;
    protected string $modele;
    protected string $prixJour;
    protected bool $disponible = true;

    public function afficherDetails()
    {
        echo "{$this->immatriculation}{$this->marque}{$this->modele}{$this->prixJour}{$this->disponible} ";
    }

    public function calculerPrix(int $jours)
    {
        return $this->prixJour * $jours;
    }
    public function estDisponible(): bool
    {
        if ($this->disponible) {

          return  $this->disponible = true;
        } else {
            return  $this->disponible = false;
        }
    }


    abstract public function getType(): string;
}

class Voiture44 extends Vehicule44 implements ReservableInterface
{
    public $nbPortes;
    public $transmission;

    public function __construct($nbPortes, $transmission)
    {
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours) {
     
         
    }
    public function afficherDetails()
    {
        echo "{$this->nbPortes}{$this->transmission} ";
    }


    public function getType():string
    {
     return  "this is a voiture";
    }
}

class Moto44 extends Vehicule44  implements ReservableInterface
{
    public $cylindree;
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours) {}


    public function afficherDetails()
    {
        echo "{$this->cylindree} ";
    }


    public function getType():string
    {
     return  "this is a moto";
    }
}

class Camion44 extends Vehicule44 implements ReservableInterface
{
    public $capaciteTonnage;
    public function reserver(Client44 $client, DateTime $dateDebut, int $nbJours) {}

    public function afficherDetails()
    {
        echo "{$this->capaciteTonnage}";
    }


    public function getType():string
    {
     return  "this is a Camion44";
    }
}



abstract class Personne44
{
    protected string $prenom;
    protected string $nom;
    protected string $email;

    

    abstract public function afficherProfil();
}

class Client44 extends Personne44
{

    public int $numeroClient;
    public array $reservations = [];
    public function __construct($prenom, $nom, $email, $numeroClient)
    {
        parent::__construct($prenom, $nom, $email);
        $this->numeroClient = $numeroClient;
    }
    public function afficherProfil()
    {
        echo " {$this->prenom}{$this->nom}{$this->email} ";
    }
    public function getHistorique()
    {
        foreach ($this->reservations as $item) {
            echo $item;
        }
    }
    public function ajouterReservation(Reservation44 $r)
    {

        $this->reservations[] = $r;
    }
}


class Agence44
{
    public $nom;
    public $ville;
    public $vehicules = [];
    public $clients  = [];

    use LoggerTrait44;


    public function __construct($nom, $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function ajouterVehicule(Vehicule44 $v)
    {
        $this->vehicules[] = $v;
    }

    public function rechercherVehiculeDisponible(string $type) {}

    public function enregistrerClient(Client44 $c)
    {
        $this->clients[] = $c;
    }
function logAction(string $message){
        echo "this logger action funct {$message}";
    }



    public function faireReservation(Client44 $client, Vehicule44 $v, DateTime $dateDebut, int $nbJours):Reservation{}
}

class Reservation44
{
    public Vehicule44  $vehicule;
    public Client44  $client;

    public $dateDebut;
    public $nbJours;
    public $statut=null;

       public function __construct($dateDebut,$nbJours,$statut){
$this->dateDebut=$dateDebut;
$this->nbJours=$nbJours;
$this->statut=$statut;
       }

    public function calculerMontant() {
return $this->nbJours*$this->vehicule->calculerPrix();
    }
    public function confirmer() {
        return $this->statut=true;
    }
    public function annuler() {
        return $this->statut=false;

    }
}



 Trait LoggerTrait44{
    function logAction(string $message){
        echo "this logger action funct {$message}";
    }
 }