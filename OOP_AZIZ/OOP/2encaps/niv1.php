<?php

class CompteBancaire1
{
    private $solde1;
    private $historiqueTransactions=[];

    public function __construct($solde1)
    {
        if ($solde1 > 0) {
            $this->solde1 = $solde1;
            $this->historiqueTransactions[] = $solde1;
        } else {
            throw new Exception("negatif", 1);
        }
    }
    public function getsolde1()
    {
        return $this->solde1;
    }

    public function deposer1($montant)
    {
        if ($montant < 0) {
            throw new Exception("negatif", 1);
        } else {
            $this->solde1+= $montant;
            $this->historiqueTransactions[]=$this->solde1;
        }
    }
    public function retirer1($montant)
    {
        if ($montant < 0) {
            throw new Exception("montant negatif", 1);
        } elseif ($montant > $this->solde1) {
            throw new Exception("more than solde", 1);
        } else {
            $this->solde1 -= $montant;
            $this->historiqueTransactions[]=$this->solde1;

        }
    }

    public function  getHistorique(){
        foreach ($this->historiqueTransactions as $trans) {
echo $trans . "<br>";
        }
    }
}

$cmt=new CompteBancaire1(100);
$cmt->deposer1(100);
$cmt->deposer1(200);
$cmt->getHistorique();
echo $cmt->getsolde1();
