<!-- SEZIONE PHP CON LA LOGICA -->
<?php
// CONDIZIONE PER VERIFICARE CHE I CAMPI DEL MODULO SIANO STATI COMPILATI
if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {

    // ASSEGNO ALLE VARIABILI I VALORI DEI CAMPI INPUT NEL FORM
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $eta = $_GET['eta'];

    // VERIFICO LE CONDIZIONI DETTATE DALL'ESERCIZIO
    if (strlen($nome) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($eta)) {
        echo $message_success = '<p class="text-center fw-bold fs-1 bg-success text-light py-3"> Accesso riuscito </p';
    } 
    else {
        echo $message_failed = '<p class="text-center fw-bold fs-1 bg-danger text-light py-3"> Accesso negato </p';
    }
}
?>

<!-- SEZIONE HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 2</title>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <!-- TITOLO FORM -->
                <h1 class="text-primary mb-5 text-center">Form di accesso segreto</h1>

                <!-- FORM -->
                <form action="snack2.php" method="GET">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Scrivi il tuo nome per bene</label>
                        <input class="form-control" type="text" name="nome" placeholder="Nome" aria-label="default input example" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Scrivi la tua mail leggibile</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Scrivi la tua vera età e non ti vergognare di ciò</label>
                        <input class="form-control" type="text" name="eta" placeholder="Età reale e non inventata perché voglio essere più giovane" aria-label="default input example" require>
                    </div>
                    <button type=" submit" class="btn btn-warning btn-lg w-100 text-center">Invia (ora o mai più)!</button>
                </form>
                

            </div>
        </div>
    </div>
</body>

</html>