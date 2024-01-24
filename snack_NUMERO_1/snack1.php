<!-- SEZIONE PHP CON LA LOGICA -->
<?php
    // ARRAY DI SQUADRE
    $teams = [
        [
            'squad_casa' => 'Milano',
            'squad_ospite' => 'Torino',
            'punti_casa' => '55',
            'punti_ospiti' => '51',
        ],
        [
            'squad_casa' => 'Napoli',
            'squad_ospite' => 'Verona',
            'punti_casa' => '80',
            'punti_ospiti' => '33',
        ],
        [
            'squad_casa' => 'Palermo',
            'squad_ospite' => 'Catania',
            'punti_casa' => '63',
            'punti_ospiti' => '91',
        ],
        [
            'squad_casa' => 'Albinoleffe',
            'squad_ospite' => 'Bologna',
            'punti_casa' => '88',
            'punti_ospiti' => '75',
        ],
        [
            'squad_casa' => 'Roma',
            'squad_ospite' => 'Bari',
            'punti_casa' => '77',
            'punti_ospiti' => '45',
        ],
        [
            'squad_casa' => 'Cagliari',
            'squad_ospite' => 'Cuneo',
            'punti_casa' => '45',
            'punti_ospiti' => '61',
        ],
        [
            'squad_casa' => 'Bergamo',
            'squad_ospite' => 'Brescia',
            'punti_casa' => '66',
            'punti_ospiti' => '68',
        ]
    ]

?>

<!-- SEZIONE HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 1</title>
</head>

<body>
    <div class="container d-flex justify-content-center my-5">
        <div class="row w-50">
            <div class="col-12">
                <ul class="list-group text-center">
                    <?php foreach($teams as $team){
                        ?>    
                        <li class="list-group-item">
                             <?php
                                echo $team['squad_casa']." - ".$team['squad_ospite']." | ".$team['punti_casa']."-".$team['punti_ospiti']
                             ?>
                        </li>
                   <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>