<?php

function inverseChaine($chaine) {
$motInvers="";

$motlength=strlen($chaine);

for ($i=$motlength-1; $i>=0; $i--) { 

    $motInvers.=$chaine[$i];

}
return $motInvers;
}
$mott="azer";
echo inverseChaine($mott);



?>