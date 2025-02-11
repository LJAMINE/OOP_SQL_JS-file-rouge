<?php

// 2. Somme des Éléments d’un Tableau


function sommeTable($tabble){

    $total=0;
    for ($i=0; $i <count($tabble) ; $i++) { 
    
        $total+=$tabble[$i];
    }
 echo   $moy= $total/count($tabble);

}

$taalb=[5,5];
 sommeTable($taalb);