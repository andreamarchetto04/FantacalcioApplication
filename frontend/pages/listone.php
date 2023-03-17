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

            <div class="col-10">
                <div class="row">
                    <h1 class="title text-center" id="title_table">
                    </h1>
                </div>
                <div class="row">
                    <div>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">quotation</th>
                                    <th scope="col">name</th>
                                    <th scope="col">role</th>
                                    <th scope="col">team</th>
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
    include_once dirname(__FILE__) . '/../function/player.php';

    $player_arr = getArchivePlayer();

    if (!empty($player_arr) && $player_arr != -1) {
        foreach ($player_arr as $row) {
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