<?php

trait affuchageFormat
{
    public function afficherFormat()
    {
        echo 'this  the book';
    }
}

class Livre23
{
    use affuchageFormat;
    readonly string  $datepub;

    public function __construct($datepub)
    {
        $this->datepub =$datepub;
    }

    public function setDate($datepub)
    {
        $this->datepub = $datepub;
    }
}


$liv = new Livre23("1123");
// $liv->datepub="1111";
$liv->afficherFormat();
