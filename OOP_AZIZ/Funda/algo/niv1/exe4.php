<?php 

function compterOccurrences($tableau, $valeur) {
 $count=0;
for ($i=0; $i < count($tableau); $i++) {  
if ($tableau[$i]==$valeur) {
    $count++;
} else {
}

}  
echo $count;

}
$tablle=[2,3,2,2,3,2];
compterOccurrences($tablle,3);


?>