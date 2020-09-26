<?php 
include ("config.php");
if (isset($_POST['search'])) {
	$searchByValue = $_POST['searchByValue'];
	// echo $searchByValue;
	$searchSelect = "SELECT * FROM `contentupload` where  upl_company LIKE '%$searchByValue%'";
	$filter_result = mysqli_query($conn, $searchSelect);
	print_r($filter_result);
	// while ($rows = mysqli_fetch_array($filter_result)) {
	 	// echo $rows['upl_address'];
	 
}
// else{
// 	$searchSelect = "SELECT * FROM `contentupload`";
// 	$filter_result = mysqli_query($conn, $searchSelect);	 
// 	return $filter_result;
// }
?>