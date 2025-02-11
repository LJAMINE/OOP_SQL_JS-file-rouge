<?php

function inverseChaine($chaine) {
$motiinvers="";

$motlength=strlen($chaine);

for ($i=$motlength-1; $i>=0; $i--) { 

    $motiinvers = $motiinvers . $chaine[$i];

}
return $motiinvers;
}
$mott="azer";
echo inverseChaine($mott);



?>