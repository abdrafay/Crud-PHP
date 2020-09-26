<?php 
#session start
session_start();
#connection to database
include('config.php');

if(isset($_POST['login'])){
		$name = $_POST['p_name'];
		// $email = $_POST['email'];
		$password = $_POST['password'];
		// $password = $password;
		$slct = "SELECT * FROM `users` WHERE p_name = '$name' and password = '$password' ";
		$result = mysqli_query($conn, $slct);
		if (mysqli_num_rows($result) == 1) {
			
			$_SESSION['p_name'] = $name;
			// Fetching User ID From USers Table To Create Session in Index Page 
			$sl = "SELECT * FROM `users` where p_name = '$name'";
			 $res = mysqli_query($conn, $sl);
				while ($row=mysqli_fetch_array($res)) {
				 	$_SESSION['id'] = $row['id'];
				 	// echo $_SESSION['id'];
				 	header("location:../index.php");

				 };
			

		}
		else {
			echo "Not Registered";
		}
		
		
	
 };

	


 ?>