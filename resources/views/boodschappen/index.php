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
            <table>
	<?php
	require_once "../../../config/conn.php";
	$query = "SELECT * FROM boodschappen";
	$statement = $conn->prepare($query);
	$statement->execute();
	$list = $statement->fetchAll(PDO::FETCH_ASSOC);
	?>
	<tr>
		<th>id</th>
		<th>boodschappen</th>
		<th>catergorie</th>
		<th>afvinken</th>
		<th>edit</th>
	</tr>
	<?php foreach($list as $row): ?>
	<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['boodschap']; ?></td>
<td><?php echo $row['categorie'];?></td>
<td><?php echo $row['afvinken']; ?></td>
<td><a href="<?php echo "edit.php" . "?id=" . $row['id']; ?>">edit</a></td>

	</tr><br>
	<?php endforeach; ?>
</table>
        </div>
    </div>

    <?php require_once __DIR__.'/../componenten/footer.php'; ?>


</body>

</html>