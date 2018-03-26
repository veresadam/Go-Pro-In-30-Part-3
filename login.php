<?php
	include('db.php');
	$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
	$stmt->bind_param("s", $_POST['fnev']);
	$stmt->execute();
	$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	$response = [];
	if($row['password'] == $_POST['fjelszo']){
		$response = [];
		$response['sql'] = $row;
		$response['result'] = "Sikeres";
	}else{
		$response = [];
		$response['result'] = "Hibás jelszó vagy felhasználónév";
	}
	echo json_encode($response);
?>