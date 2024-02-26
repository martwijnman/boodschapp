<?php require_once __DIR__.'/../../../config/config.php'; ?>


<header>
    <div class="wrapper flex">
        <div class="logo-name">
            <img src="<?php echo $base_url . '/public_html/img/shopping.jpg';?>" style="width: 100px">
            <h1><a class="logo-header" href="<?php echo $base_url; ?>/resources/views/index.php">BoodschApp</a></h1>
        </div>
        <nav>
            <a href="<?php echo $base_url; ?>/resources/views/index.php">Home</a>
            <a href="<?php echo $base_url; ?>/resources/views/boodschappen/index.php">Jouw boodschappen</a>

            <a href="<?php echo $base_url; ?>/resources/views/login.php">Inloggen</a>

            <!-- <a href="">Mijn account</a> --> 
            <!-- <a href="">Registreren</a> -->
        </nav>
    </div>
</header>