<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap" rel="stylesheet">
    <title>Mark 2 do</title>
</head>
<?php

if (isset($_SESSION['userName']))
    header("Location: index.php");
?>

<body>
    <section class="login">
        <h1 class="title-app">Mark 2 do</h1>
        <div class="div-form-blue">
            <div class="div-form-white">
                <form class="form" action="doLogin.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="buttons">
                        <button type="button" class="btn btn-primary btn-lg">Login</button>
                        <button type="button" class="btn btn-link">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<?php
require_once("footer.php");
?>