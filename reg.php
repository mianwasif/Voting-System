<?php
	
	include 'includes/conn.php';

	$cnic = $_POST['cnic'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO voters (voters_id, cnic, password, firstname, lastname) VALUES ('$voter','$cnic','$password', '$firstname', '$lastname')";
	
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	
	

	header('location: index.php');
?>