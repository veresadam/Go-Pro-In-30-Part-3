<?php
	include('db.php');
	$nev = $_POST["fnev"];
	$pw = $_POST["fjelszo"];
	$physical1 = $_POST["optionsRadios1"];
	$physical2 = $_POST["optionsRadios2"];
	$physical3 = $_POST["optionsRadios3"];
	$physical4 = $_POST["optionsRadios4"];
	$physical5 = $_POST["optionsRadios5"];
	$osszeg = $physical1 + $physical2 + $physical3 + $physical4 + $physical5;
	$stmt = $conn->prepare("SELECT * FROM user where username = ?");
	$stmt->bind_param('s', $nev);
	$stmt->execute();
	$result = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	if(is_null($result['username'])){
		$asd = $conn->prepare("INSERT INTO user (username, password, physical, reg_date) VALUES (?, ?, ?, NOW())");
		$asd->bind_param("ssi", $nev, $pw, $osszeg);
		$asd->execute();
		$stmt = $conn->prepare("SELECT id FROM user WHERE username = ?");
		$stmt->bind_param('s', $nev);
		$stmt->execute();
		$result = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
		$id =  $result['id'];
		$resp = [];
		$resp['result'] = "Sikeres regisztrácíó!";
		$resp['id'] = $id;
		echo json_encode($resp);
	}else{
		echo "Mar letezik ez a nev az adatbazisban!";
	}

	// kezi -> 14
	// kosar -> 10
	// ropi  < 10

	?>
