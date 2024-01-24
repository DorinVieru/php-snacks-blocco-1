<!-- SEZIONE PHP CON LA LOGICA -->
<?php
// ARRAY DI POST
$posts = [
    '01-05-2012' => [
        [
            'title' => 'Post Attento',
            'author' => 'Silvio Tralenuvole',
            'text' => 'Una volta, tanto tempo fa.. non mi ricordo altro!!',
        ],
        [
            'title' => 'Post Controverso',
            'author' => 'Anna Precisa',
            'text' => 'Secondo me è colpa di Silvio, comunque sono stato io, ma non quel giorno, ma ora purtroppo si.',
        ],
    ],
    '01-08-2012' => [
        [
            'title' => 'Post Inventato',
            'author' => 'Lorenzo Perluso',
            'text' => 'Ho perso le idee, scrivo questo.',
        ],
        [
            'title' => 'Post Male',
            'author' => 'Alfredo Ginnoni',
            'text' => 'Vorrei scrivere, ma mi hanno rubato la penna e la mia anima.',
        ],
    ],
    '01-01-2013' => [
        [
            'title' => 'Post Scritto',
            'author' => 'Sara Ancora',
            'text' => 'Non metto volutamente gli apostrofi in questo testo, perché altrimenti dovrei mettere i doppi apicetti',
        ],
        [
            'title' => 'Post Bene',
            'author' => 'Stefano Malvagio',
            'text' => 'Non sono molto furbo ma non so cosa scrivere.',
        ],
    ],
    '01-09-2019' => [
        [
            'title' => 'Post Senza Voglia',
            'author' => 'Roberto Incrusori',
            'text' => 'Forse in un post manca il punto, ma non ho voglia di correggerlo.',
        ],
        [
            'title' => 'Post Senza Un Titolo Decente',
            'author' => 'Sandro Alladeriva',
            'text' => 'Incredibile sono arrivato a questo ultimo post, e chi lo avrebbe mai detto!',
        ],
    ],
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
    <title>Snack 3</title>
</head>

<body>
    <div class="container d-flex justify-content-center my-5">
        <div class="row w-75">
            <div class="col-12">
                <h1 class="text-center text-success pb-4">I post più belli che leggerai in tuta divisi per data</h1>
                <ul class="list-group text-center">
                    <?php foreach ($posts as $date => $postsInDate) { ?>
                        <?php echo "<h2 class='text-info pt-3'>Data: $date</h2>" ?>

                        <?php foreach ($postsInDate as $post) { ?>
                            <li class="list-group-item">
                                <?php
                                echo "<h3>{$post['title']}</h3>";
                                echo "<p><span class='fw-bold text-warning'>Autore:</span> {$post['author']}</p>";
                                echo "<p>{$post['text']}</p>";
                                ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>