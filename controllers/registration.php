<?php 
	session_start();
	include("config.php");
	if(isset($_POST['register'])){
		$name = $_POST['p_name'];
		$cmpny_name = $_POST['company_name'];
		$email = $_POST['email'];
		$phone = $_POST['ph_number'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		$slct = "SELECT * FROM `users` where p_name = '$name'";
		$result = mysqli_query($conn,$slct);
		
		if(mysqli_num_rows($result)!=1){
			
			if($password==$c_password){
			$insert = "INSERT INTO users(p_name, company_name, email, ph_number, password) VALUES('$name','$cmpny_name','$email','$phone','$password')";
			// mysqli_query($conn, $insert);
			if(mysqli_query($conn, $insert)){
							$_SESSION['p_name'] = $name;
							// $_SESSION['email'] = $email;


}
			header("location:logout.php");
			}#Password Confirmation
			
			else
			{
				echo '<script type="text/javascript">alert("Password Do Not Match")</script>';
			}

		}#Email Verification
		else
		{
			echo "Username is Already Taken";
		}
	}#register to the database
?>