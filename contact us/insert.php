<?php
	$username = $_POST['username'];
	$pickupl = $_POST['pickupl'];
	$pickupd = $_POST['pickupd'];
	$dropoffl = $_POST['dropoffl'];
	$dropoffd = $_POST['dropoffd'];
	$carname = $_POST['carname'];

	// Database connection
	$conn = new mysqli('localhost','root','','carlist');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booked_ride(username,pickupl,pickupd,dropoffl,dropoffd,carname) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss",$username,$pickupl,$pickupd,$dropoffl,$dropoffd,$carname);
		$execval = $stmt->execute();
		echo $execval;
		echo "booked car successfully...";
		$stmt->close();
		$conn->close();
	}
	header("refresh:2;url=http://localhost:8080/rentAcar/index.php");
?>
 