<?php
	require_once("..\config\connector.php");

    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$no_hp = $_POST['no_hp'];

	
    $stmt = $db->prepare("insert into user(nama, email, password, no_hp) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nama, $email, $password, $no_hp);
    $execval = $stmt->execute();
    echo $execval;
    if($execval) header("Location: ../pages/Login-Rayhan.php");
	
?>