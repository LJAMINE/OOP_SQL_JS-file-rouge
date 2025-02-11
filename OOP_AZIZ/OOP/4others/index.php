<?php
trait AffichageFormat
{
    public function afficherFormat()
    {

        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
class LLivre
{
    use AffichageFormat;

    private $titre;
    private $prix;
    private $auteur;
    readonly string  $datePublication;

    public function __construct($titre, $prix, $auteur, $datePublication)
    {
        $this->auteur = $auteur;
        $this->prix = $prix;
        $this->titre = $titre;
        $this->datePublication = $datePublication;
    }


    public function setDte($datePublication)
    {
     $this->datePublication = $datePublication;
    }
    public function getAuteur()
    {

        return $this->auteur;
    }
    public function getTitre()
    {

        return $this->titre;
    }
    public function getprix()
    {

        return $this->prix;
    }
}

$liivre = new LLivre("azer", 123, "amine","1999");
$liivre->setDte("éééé");
echo $liivre->afficherFormat();
