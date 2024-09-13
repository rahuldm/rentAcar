<?php
require_once('db.php');
	if(isset($_POST['name'])){
    $name = $_POST['name'];
	$email = $_POST['email'];
    $username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
 
		$stmt = $conn->prepare("insert into registration(name, email, username, password,confirm) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $email,$username, $password, $confirm);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    header("refresh:1;url=http://localhost:8080/rentAcar/login.php");
?>