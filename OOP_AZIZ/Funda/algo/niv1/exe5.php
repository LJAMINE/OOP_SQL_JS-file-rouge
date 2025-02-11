<?php

function inverse($chaine){
    $motinverse="";
    $strLength=strlen($chaine);

    for ($i=$strLength-1; $i >=0 ; $i--) { 

        $motinverse=$motinverse.$chaine[$i];
    }
     echo $motinverse;
}

$str="aze";
 inverse($str);

?>