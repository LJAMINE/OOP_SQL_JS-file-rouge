<?php

function deuxiemeMax($tableau)
{
    

    $max1 = $max2 = null;

    for ($i = 0; $i < count($tableau); $i++) {
        if ($max1 === null || $tableau[$i] > $max1) {
            $max2 = $max1; 
            $max1 = $tableau[$i];
        } elseif ($tableau[$i] !== $max1 && ($max2 === null || $tableau[$i] > $max2)) {
            $max2 = $tableau[$i];
        }
    }

    return $max2;
}

$tabl = [1, 2, 4,3];
echo deuxiemeMax($tabl); 
?>
