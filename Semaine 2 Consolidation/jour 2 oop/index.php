<?php
class Voiture
{
    public $marque;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }


    public function demarrer()
    {
        echo "La voiture démarre";
    }
}

// $voitire = new Voiture("catkat");
// $voitire->demarrer();


//--------------------
//moyenne

class CMPTEBANCAIRE
{
    public float $solde;

    public function __construct($solde)
    {
        $this->solde = $solde;
    }
    public function deposer($montant)
    {
        return $this->solde += $montant;
    }
    public function retirer($montant)
    {

        if ($this->solde > $montant) {
            return $this->solde -= $montant;
        } else {
            throw new Exception("Error Processing Request", 1);
        }
    }
}

// $cmpt=new CMPTEBANCAIRE(0);
//  echo $cmpt->deposer(10);
//  echo $cmpt->deposer(22);
//  echo $cmpt->retirer(22);


//--------------------

class ETUDIANT
{
    public $nom;
    public $notes = [];

    public function ajouterNote($note)
    {
        $this->notes[] = $note;
    }

    public function moyenne()
    {
        $total = 0;
        foreach ($this->notes as $note) {

            $total += $note;
        }

        return $total / count($this->notes);
    }
}

// $stud=new ETUDIANT();
// echo $stud->ajouterNote(12);
// echo $stud->ajouterNote(2);

// echo $stud->moyenne();



//difficiles

class RECTANGLE34
{

    public $lon;
    public $lar;

    public function __construct($lar,$lon){
$this->lar=$lar;
$this->lon=$lon;
    }
    public function aire()
    {
        return $this->lar * $this->lon;
    }
    public function estCarre()
    {
        return ($this->lar === $this->lon);
    }
}


$RECTANGLE=new RECTANGLE34(3,3);
 echo $RECTANGLE->aire();
 echo $RECTANGLE->estCarre();
