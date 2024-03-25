<?php 
//dit wordt de pagina waarop je je boodschappen kunt aanpassen
?>
 <form action="../../../app/Http/Controllers/boodschappenController.php" method="POST">
 <label for="id">id</label>
                <input type="text" name="id" value="<?php echo $_GET['id'];?>">

                <label for="boodschap">boodschap</label>
                <input type="text" name="boodschap">

                <label for="categorie">categorie</label>
                <input type="text" name="categorie">

                <input type="hidden" name="action" value="update">
                <input type="submit" value="verzenden">
            </form>
            <form action="../../../app/Http/Controllers/boodschappenController.php" method="POST">
            <label for="id">id</label>
                <input type="text" name="id" value="<?php echo $_GET['id'];?>">
            <input type="hidden" name="action" value="delete">
                <input type="submit" value="verzenden">
            </form>