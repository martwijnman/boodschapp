<?php 

//hier komt de logica om een boodschap toe te voegen, te wijzigen en/of te verwijderen
//maak dit onderdeel pas nadat je de boodschappen resource volledig werkend hebt gekregen.
$action = $_POST['action'];

if($action == "delete"){
    require_once "conn.php";
    $query = "DELETE FROM berichten WHERE :title = title";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":title" => $title
    ])
}

?>

?>