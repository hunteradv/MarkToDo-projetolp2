<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <?php

    session_start();

    if (!isset($_SESSION['loggedUser']) || $_SESSION['loggedUser'] === false) {
        echo "<p>Você precisa logar para acessar esta página</p>";
    } else {
        require_once("../header.php");

    ?>
        <section class="environments">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action">The current button</button>
                <button type="button" class="list-group-item list-group-item-action">A second button item</button>
                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                <button type="button" class="list-group-item list-group-item-action">A disabled button item</button>
            </div>
        </section>
</body>

</html>

<?php

        require_once("../footer.php");
    }
