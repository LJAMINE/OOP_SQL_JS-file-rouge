<?php

function compterOccurrences($tableau, $valeur)
{
    $count = 0;
    for ($i = 0; $i < count($tableau); $i++) {
        if ($valeur == $tableau[$i]) {
            $count++;
        } else {

        }
    }
    echo $count;
}

$tabbbble=[1,2,1];
compterOccurrences($tabbbble,valeur: 1);
