<?php 

//hier komt de logica om een boodschap toe te voegen, te wijzigen en/of te verwijderen
//maak dit onderdeel pas nadat je de boodschappen resource volledig werkend hebt gekregen.
$action = $_POST['action'];
if ($action == "update"){
    $boodschap = $_POST['boodschap'];
    $categorie = $_POST['categorie'];
    require_once "../../../config/conn.php";
    $query = "UPDATE berichten SET boodschap = :boodschap, categorie = :categorie WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id,
        ":boodschap" => $boodschap,
        ":categorie" => $categorie,
    ]);
}
if($action == "delete"){
    $id = $_POST['id'];
    require_once "../../../config/conn.php";
    $query = "DELETE FROM berichten WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id,
    ]);
}
if($action == "create"){
    $boodschap = $_POST['boodschap'];
    $categorie = $_POST['categorie'];
    require_once "../../../config/conn.php";
    $query = "INSERT INTO (boodschap, categorie) VALUES(:boodschap, :categorie)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":boodschap" => $boodschap,
        ":categorie" => $categorie
    ]);
}
    


?>