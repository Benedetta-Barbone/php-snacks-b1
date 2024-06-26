
<?php
$partite_basket = [
    [
        "squadra_casa"=> "Team A",
        "squadra_ospite"=> "Team B",
        "punti_casa"=> 95,
        "punti_ospite"=> 88
    ],
    [
        "squadra_casa"=> "Team C",
        "squadra_ospite"=> "Team D",
        "punti_casa"=>102,
        "punti_ospite"=> 98
    ],
    [
        "squadra_casa"=> "Team E",
        "squadra_ospite"=> "Team F",
        "punti_casa"=> 110,
        "punti_ospite"=> 105
    ],
    [
        "squadra_casa"=> "Team G",
        "squadra_ospite"=> "Team H",
        "punti_casa"=> 85,
        "punti_ospite"=> 92
    ],
    [
        "squadra_casa"=> "Team I",
        "squadra_ospite"=> "Team J",
        "punti_casa"=> 97,
        "punti_ospite"=> 100
    ],
];

?>

<ul>
    <?php foreach ($partite_basket as $partita) { ?>
        <li>
            <?php echo $partita['squadra_casa']; ?> - <?php echo $partita['squadra_ospite']; ?>- <?php echo $partita['punti_casa'];?> - <?php echo $partita['punti_ospite'];?>
        </li>
    <?php } ?>
     
</ul>
