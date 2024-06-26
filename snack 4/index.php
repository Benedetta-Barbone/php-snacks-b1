<?php 

$numeriCasuali = [];


for ($i=0; $i < 15; $i++) { 
    $numRandom = rand(1,50);
    $newArray = array_push($numeriCasuali, $numRandom);
    echo $newArray;
}

?>