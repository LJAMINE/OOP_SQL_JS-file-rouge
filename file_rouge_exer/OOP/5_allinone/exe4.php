<?php

abstract class MMbreEcole123
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function setAge($age)
    {
        if ($this->age < 0) {
            return;
        } else {
            $this->age = $age;
        }
    }
    abstract public function sePresenter();
}


class Etudiant123 extends MMbreEcole123
{


    private $notes = [];

    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }

    public function sePresenter()
    {
        echo  "Je suis {$this->nom}, un étudiant de  {$this->age} ans.";
    }

    public function ajouterNote($note)
    {
        if ($note > 0 && $note < 20) {
            $this->notes[] = $note;
        } else {
            throw new Exception("not good note", 1);
        }
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
$newEtudiant=new Etudiant123("zara","12");
$newEtudiant2=new Etudiant123("bro","12");
// $newEtudiant->ajouterNote(12);
// $newEtudiant->ajouterNote(2);

// echo $newEtudiant->moyenne();

class Enseignant233 extends MMbreEcole123
{

    static public $nombreDeEtudiants = 0;
    public $listeEtudiants = [];
    public $specialtyy;

    public function __construct($nom, $age, $specialtyy)
    {
        parent::__construct($nom, $age);
        $this->specialtyy = $specialtyy;
    }
    public function sePresenter()
    {
        echo  "Je suis {$this->nom}, un étudiant de  {$this->age} ans.";
    }
    public function enseigner()
    {
        echo  " {$this->nom} enseigne la spécialité  {$this->specialtyy}";
    }

    public function ajouterEtudiant(Etudiant123  $etudiant)
    {

        $index = array_search($etudiant, $this->listeEtudiants);

        if ($index) {
            throw new Exception("doublons", 1);
        } else {
            $this->listeEtudiants[] = $etudiant;
        }
    }

    public function afficherParticipants()
    {
        foreach ($this->listeEtudiants as $student) {
            $student->sePresenter();
        }
    }
}



class ProfesseurPrincipal extends Enseignant233{
    
}


$ENSEi=new Enseignant233("zsd","22","math");
$ENSEi->ajouterEtudiant($newEtudiant);
$ENSEi->ajouterEtudiant($newEtudiant2);
$ENSEi->afficherParticipants();