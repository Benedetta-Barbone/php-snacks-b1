<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 6</title>
</head>
<body>
    <?php foreach ($db['teachers'] as $teachers) { ?>
        <div class="gray">    
            <?php echo $teachers['name']; ?>  <?php echo $teachers['lastname']; ?> <br>
        </div>
    <?php } ?>

    <?php foreach ($db['pm'] as $teachers) { ?>
        <div class="green">    
            <?php echo $teachers['name']; ?>  <?php echo $teachers['lastname']; ?> <br>
        </div>
    <?php } ?>
    
</body>
</html>
