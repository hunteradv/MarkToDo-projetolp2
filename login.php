<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Mark 2 do</title>
</head>
<?php
require_once("footer.php");

session_start();

if (isset($_SESSION['userName']))
    header("Location: index.php");
?>

<body>
    <section class="login">
        <div class="div-form-blue">
            <div class="div-form-white">
                <form class="form" action="doLogin.php">
                    <label for="inputPassword5" class="form-label">Senha</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

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