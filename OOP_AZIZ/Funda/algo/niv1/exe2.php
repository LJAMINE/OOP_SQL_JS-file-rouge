<?php

// 2. Somme des Éléments d’un Tableau


function sommeTableau($tableau)
{

    $total = 0;
    for ($i = 0; $i < count($tableau); $i++) {

         $total += $tableau[$i];
    }
    echo $total;
}

$tableau=[1,2,3];
sommeTableau($tableau);