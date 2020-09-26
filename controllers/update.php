<?php 
session_start();
include 'config.php';			
if (isset($_POST['update'])) {
			$upl_company = $_POST['upl_company'];
			$upl_cnt_person = $_POST['upl_cnt_person'];
			$upl_email = $_POST['upl_email'];
			$upl_num = $_POST['upl_num'];
			$upl_tel = $_POST['upl_tel'];
			$upl_website = $_POST['upl_website'];
			$upl_select = $_POST['upl_select'];
			$upl_address = $_POST['upl_address'];
			$upl_desig = $_POST['upl_desig'];

			// Getting ID
				// $id = $_GET['id'];
			# Variables For Image Upload 

$upl_img = $_FILES['upl_img'];
$upl_name = $_FILES['upl_img']['name'];
$upl_tmp = $_FILES['upl_img']['tmp_name'];
$upl_size = $_FILES['upl_img']['size'];
$upl_error = $_FILES['upl_img']['error'];
$upl_type = $_FILES['upl_img']['type'];
$upl_ext = explode('.', $upl_name);

# file Actual Extension

$upl_act_ext = strtolower(end($upl_ext));
$allowed = array('jpg', 'jpeg', 'png', 'pdf');

if (in_array($upl_act_ext, $allowed)) {
	if ($upl_error === 0) {
		if ($upl_size < 3000000) {
			$upl_destination = '../uploaded/'.$upl_name;
			move_uploaded_file($upl_tmp, $upl_destination);
		} #uplsize 
		 else{
			echo "Your file is too Big";
		}# file is to big
	}
	else
	{
		echo "There was an error uploading your file!";
	}# there was an error 

} # If IN Array ..
else
{
	echo "You cannot upload files of this type!";
}# You cannot upload this Type.....
						$id = $_SESSION['id'];
						//echo $id;
	$upd = "UPDATE `contentupload` SET upl_company = '$upl_company', upl_cnt_person = '$upl_cnt_person', upl_email = '$upl_email', upl_num = '$upl_num', upl_tel = '$upl_tel', upl_website = '$upl_website', upl_select = '$upl_select', upl_address = '$upl_address', upl_desig = '$upl_desig', upl_img = '$upl_name' where id = '$id'";

	 $res = mysqli_query($conn, $upd);
	 if ($res) {
	 	echo "Your Data Has Been Updated";
	 header("location:../index.php");
	 }else {
	 	echo "Something Went Wrong";
	 };
}
?>