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


<body class="bg">
    <form class="form-signin" method="post">
        <div class="row">
            <div class="col-7 mx-auto">
                <img class="mb-4" src="../assets/img/logo1.png" alt="" width="100%" height="">
            </div>
        </div>
        <h1 class="h3 mb-3 fw-bold">Inserisci le credenziali</h1>
        <label for="inputName" class="sr-only mb-2">Nickname</label>
        <input type="text" id="inputName" class="form-control mb-4" placeholder="nickname" name="nickname" required>
        <label for="inputPassword" class="sr-only mb-2">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" name="password"
            required>

        <?php
        session_start();

        include_once dirname(__FILE__) . '/../function/user.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['nickname']) && !empty($_POST['password'])) { //se la variabile mail o password che devono essere inviate non sono vuote all'ora si invia
        
                $pw = hash("sha256", $_POST['password']);

                $data = array(
                    //Immetto i dati all'interno di data
                    "nickname" => $_POST['nickname'],
                    "pw" => $pw,
                );

                $err = logon($data);
                if ($err == "-1") {
                    echo ('<p class="text-danger">Errore nella registrazione, riprova più tardi!</p>');
                }
            }
        }
        ?>
        <div class="row">
            <button class="btn btn-lg btn-primary btn-block mx-auto" type="submit">Registrati</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        /* border-bottom-right-radius: 0; */
        /* border-bottom-left-radius: 0; */
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        /* border-top-left-radius: 0; */
        /* border-top-right-radius: 0; */
    }

    body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("../assets/img/campocalcio.jpg");

  /* Full height */
  height: 95%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>