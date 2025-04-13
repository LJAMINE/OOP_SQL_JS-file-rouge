<?php
class comptelast
{
    private $solde;

    public function __construct($solde)
    {
        if ($solde < 0) {
            throw new Exception("negative", 1);
        } else {
            $this->solde = $solde;
        }
    }
    public function  getsolde()
    {
        return $this->solde;
    }
    public function  deposer($montant)
    {
        $this->solde += $montant;
    }
    public function  retirer($montant)
    {
        if ($this->solde < $montant) {
            throw new Exception("Error Processing Request", 1);
        } else {
            $this->solde -= $montant;
        }
    }
}


$soldes=new comptelast(100);

$soldes->deposer(100);
$soldes->retirer(100);
echo $soldes->getsolde();


// echo "oosoos";