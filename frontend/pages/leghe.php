<?php
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fantacalcio | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/letter-f.png">
</head>

<body>
    <?php require_once(__DIR__ . '\header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <h1 class="title text-center" id="title_table">Leghe
                    </h1>
                </div>
                <div class="row">
                    <div>
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">ID_Amministratore</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once dirname(__FILE__) . '/../function/league.php';

    $league_arr = getArchiveLeague();

    if (!empty($league_arr) && $league_arr != -1) {
        foreach ($league_arr as $row) {
            echo ('<tr>');
            foreach ($row as $cell) {
                echo ('<td>' . $cell . '</td>');
            }
        }
        echo ('</tbody>');
        echo ('</table>');
    }
    ?>
    <?php require_once(__DIR__ . '\footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>