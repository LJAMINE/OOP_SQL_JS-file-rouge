<?php
abstract class MembreEcole
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    abstract public  function sepresenter();
}

class Étudiant extends MembreEcole
{
    private $notes = [];

    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }
    public  function sepresenter()
    {
        echo  "Je suis {$this->nom}, un étudiant de{$this->age}, ans.";
    }

    public function ajouterNote($note)
    {
        if ($note > 0 && $note < 20) {
            echo   $this->notes[] = $note;
        } else {
            echo "error";
        }
    }
    public function moyenne()
    {
        $total = 0;
        for ($i = 0; $i < count($this->notes); $i++) {
            $total += $this->notes[$i];
        }
        return $total / count($this->notes);
    }
}

class Enseignant  extends MembreEcole
{

    public $specialite;
    public $listeEtudiants = [];
    static public $nombreDeEtudiants = 0;

    public function __construct($nom, $age, $specialite)
    {
        parent::__construct($nom, $age);
        $this->specialite = $specialite;
    }
    public  function sepresenter()
    {
        echo  "Je suis {$this->nom}, un  enseignant en {$this->specialite}.";
    }
    public  function enseigner()
    {
        echo  "Je suis {$this->nom}, enseigne la spécialité  {$this->specialite}.";
    }
    public function ajouterEtudiant(Étudiant $etudiant)
    {
        $this->listeEtudiants[] = $etudiant;
    }
    public function afficherParticipants()
    {
        foreach ($this->listeEtudiants as $student) {
            echo($student->sepresenter());
        }
    }
}

class ProfesseurPrincipal extends Enseignant{
public function enseigner(){
    parent::enseigner();
    echo "{$this->nom}, le professeur principal, supervise la classe.";
}    
}

$new = new Étudiant("amine", 12);
$new2 = new Étudiant("med", 12);
// $new->ajouterNote(12);
// $new->ajouterNote(2);
// echo $new->moyenne();

$teacher=new Enseignant("said",23,"math");
$teacher->ajouterEtudiant($new);
$teacher->ajouterEtudiant($new2);
$teacher->afficherParticipants();
