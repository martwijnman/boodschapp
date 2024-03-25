<?php require_once __DIR__.'/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>BoodschApp / Nieuwe boodschap</title>
    <?php require_once __DIR__.'/../componenten/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__.'/../componenten/header.php'; ?>

    <div class="container">
        <div class="wrapper boodschappen">
            <h1>BoodschApp / Nieuwe boodschap toevoegen</h1>
            <p>Dit wordt de pagina waarop je een nieuwe boodschap toevoegt</p>
            <form action="../../../app/Http/Controllers/boodschappenControllers.php">
                

                <label for="boodschap">boodschap</label>
                <input type="text" name="boodschap">

                <label for="categorie">categorie</label>
                <input type="text" name="categorie">

                <input type="hidden" name="action" value="create">
                <input type="submit" value="verzenden">
            </form>
        </div>
    </div>

    <?php require_once __DIR__.'/../componenten/footer.php'; ?>


</body>

</html>