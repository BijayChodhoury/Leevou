<?php
	
	// Session for redirecting to the home page
	session_start();
	

	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection here
	$con = new mysqli("localhost", "root", "", "test");
	if($con->connect_error){
		die("Failed to connect : ".$con->connect_error);
	}
	else{
		$stmt = $con->prepare("select * from registration where email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				//echo "<h2>Login Successfully<h2>";
				//Now redirecting to the homepage with user details
				$_SESSION["user"] = $email;
				header('location:home_page.php');
			}
			else{
			echo "<center><strong><h1>Invalid Email or password</h1></strong></center>";
			echo "<a href = index.html><center><strong>Click Here To Try Again</strong></a>";
			}
		}
		else{
			echo "<center><strong><h1>Invalid Email or password</h1></strong></center>";
			echo "<a href = index.html><center><strong>Click Here To Try Again</strong></a>";
		}
	}

?>