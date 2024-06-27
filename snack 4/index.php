<?php 

$numeriCasuali = [];


while (count($numeriCasuali) < 15) { 
    $numRandom = rand(1,50);
    if ( !in_array($numRandom, $numeriCasuali, true) ){
        $numeriCasuali[] = $numRandom;
    }
}

?>

<ul>
    <?php foreach ($numeriCasuali as $numeri) {  ?>
        <li>
           <?php echo $numeri; ?>
        </li>
    <?php } ?> 
  </ul>