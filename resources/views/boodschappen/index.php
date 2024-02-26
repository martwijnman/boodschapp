<?php require_once __DIR__.'/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>BoodschApp / Jouw boodschappen</title>
    <?php require_once __DIR__.'/../componenten/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__.'/../componenten/header.php'; ?>

    <div class="container">
        <div class="wrapper boodschappen">
            <h1>Boodschappen</h1>
            <a href="create.php">+ Voeg een nieuwe boodschap toe</a>
            <p>Dit wordt de pagina waarop alle boodschappen te zien zijn</p>
        </div>
    </div>

    <?php require_once __DIR__.'/../componenten/footer.php'; ?>


</body>

</html>
