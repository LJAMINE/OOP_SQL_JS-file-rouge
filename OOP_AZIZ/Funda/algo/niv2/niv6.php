<?php

function estPalindrome($chaine)
{
    $motInv = "";
    $strLength = strlen($chaine);

    for ($i = $strLength - 1; $i >= 0; $i--) {
        $motInv = $motInv . $chaine[$i];
    }
    if ($motInv === $chaine) {
        echo "yes ";
    } else {
        echo "no";
    }
    echo $motInv;
}

$word = "ABCBA";
estPalindrome($word);
