<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componenten/head.php'; ?>
	<title>BoodschApp</title>
	<link rel="stylesheet" href="../../public_html/css/style.css">
</head>
<body>
	<?php require_once 'componenten/header.php'; ?>
	<main name="return">
		<div class="wrapper frontpage">
			<h2>Welkom bij de boodschappen app</h2>
			<p>Log in en klik op 'Jouw boodschappen' om je boodschappenlijst te zien.</p>
			<img src="../../public_html/img/boodschappenbezorgen.png" alt="">
<table>
	<?php
	require_once "../../config/conn.php";
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
	<tr>
<?php foreach($row as $list): ?>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['boodschap']; ?></td>
<td><?php echo $row['categorie'];?></td>
<td><?php echo $row['afvinken']; ?></td>
<td><a href="<?php echo "edit.php" . "?id=" . $row['id']; ?>">edit</a></td>
<?php endforeach; ?>
	</tr>
</table>
		</div>
	</main>
	<?php require_once __DIR__.'/componenten/footer.php'; ?>


</body>
</html>