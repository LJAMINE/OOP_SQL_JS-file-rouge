<?php

class CMPTE1
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

    public function getSolde()
    {
        return $this->solde;
    }
    public function SetSolde($solde)
    {
        $this->solde = $solde;
    }

    public function retires($montant)
    {

        if ($montant > $this->solde) {

            throw new Exception("Error Processing Request", 1);
        } else {
            $this->solde -= $montant;
        }
    }

    public function depos($montant)
    {
        $this->solde += $montant;
    }
}

$salaire=new CMPTE1(6);
echo $salaire->getSolde();

$salaire->depos(100);
echo $salaire->getSolde();


$salaire->retires(106);
echo $salaire->getSolde();