<?php

// abstract class User
// {
//     protected $name;
//     protected $lastname;



//     public function __construct($name, $lastname)
//     {
//         $this->name = $name;
//         $this->lastname = $lastname;
//     }
//     abstract public function afficherinfo();
// }

// class Student extends User
// {

//     public $listeInscription = [];

//     public function __construct($name, $lastname)
//     {
//         parent::__construct($name, $lastname);
//     }
//     public function afficherinfo()
//     {
//         echo " {$this->name} {$this->lastname} ";
//     }


//     public function insriptiondansCours(Cours $cours)
//     {
//         $this->listeInscription[] = $cours;
//     }

//     public function affichertousCours()
//     {
//         foreach ($this->listeInscription as $item) {
//             $item->affich();
//         }
//     }
// }

// class Admin extends User
// {

//     public function __construct($name, $lastname)
//     {
//         parent::__construct($name, $lastname);
//     }
//     public function afficherinfo()
//     {
//         echo " {$this->name} {$this->lastname} ";
//     }

//     public static $nbr;

//     public function gag(){
//         return self::$nbr;
//     }

// }


// class Cours
// {
//     public $title;
//     public $prix;
//     public function __construct($title, $prix)
//     {
//         $this->title = $title;
//         $this->prix = $prix;
//     }

//     public function affich()
//     {
//         echo " {$this->title} {$this->prix} ";
//     }
// }

// ------------------------------------------------------------


class EmployeTEST
{

    public $name;
    public $prenom;

    public $listeJob = [];

    public function __construct($name, $prenom)
    {
        $this->name = $name;
        $this->prenom = $prenom;
    }

    public function ajouterJob(JobsTEST $job)
    {
        $this->listeJob[] = $job;
    }
    public function getlastJob()
    {
        foreach ($this->listeJob as $item) {

            if ($item->endyear != null && $item->endyear > 2025) {
                return $item;
            }
        }
    }

    public function get2yearexperience()
    {
        foreach ($this->listeJob as $job) {
            if ($job->endyear - $job->startyear = 2) {
                return $job;
            }
        }
    }
}


class JobsTEST
{
    public $title;
    public $startyear;
    public $endyear;

    public $type;
    public function __construct($title, $startyear, $endyear, $type)
    {
        $this->title = $title;
        $this->startyear = $startyear;
        $this->endyear = $endyear;
        $this->type = $type;
    }
}



$newJob1 = new JobsTEST("formateur", 1999, 2000, "cdi");
$newJob3 = new JobsTEST("PEINTRE", 2022, 2026, "cdi");
$newJob2 = new JobsTEST("ostad", 2000, 2022, "cdi");




$employe = new EmployeTEST("amine", "lmgrmj");
$employe->ajouterJob($newJob1);
$employe->ajouterJob($newJob2);
$employe->ajouterJob($newJob3);




 print_r ($employe->get2yearexperience());





print_r($employe->getlastJob());
