<?php
$prenom = "Jean";
$nom = "Dupont";
$message = "PHP est génial !";
$phrase = "J'aime le café";
$texte = "Apprendre le PHP";




echo "bnjour {$prenom}{$nom}";

echo strlen($message);

 $phrase=str_replace("café","thé",$phrase);
echo $phrase;

echo substr($texte,12)
?>