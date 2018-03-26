<?php
	include('db.php');
	$stmt = $conn->prepare('UPDATE user SET sport = ?  WHERE id = ?');
	$stmt->bind_param('ii', $_POST['sport'], $_POST['id']);
	$stmt->execute();
?>