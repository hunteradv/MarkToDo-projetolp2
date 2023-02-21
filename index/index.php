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
        require_once("../context.php");

        $sql = "select * from environments";
        $result = $context->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

    ?>
        <section class="environments">
            <div class="list-group">
                <?php
                foreach ($data as $line) {
                ?>
                    <button type="button" class="list-group-item list-group-item-action"><?php echo "$line[name]" ?></button>
                <?php
                }
                ?>
            </div>
        </section>
</body>

</html>

<?php

        require_once("../footer.php");
    }
