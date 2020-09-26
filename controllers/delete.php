<?php 
include("config.php");

if (isset($_GET['id'])) {
$id = $_GET['id'];
$sel = "SELECT * FROM `contentupload` WHERE id='$id'";
$sel_res = mysqli_query($conn,$sel);
while ($row=mysqli_fetch_array($sel_res)) {
	$upl_img = $row['upl_img'];
		// echo $row['upl_img'];

};
unlink("../uploaded/".$upl_img);
$del = "DELETE FROM `contentupload` WHERE id='$id'";
$result = mysqli_query($conn, $del);
header("location: ../index.php");
}
?>