<?php 
session_start();
include("controllers/config.php");
include("header.php");

?>


<style type="text/css">
	.list-none {
		list-style: none;
	}
	.content_disp {
		font-size: 17px;
	}	
</style>
<main>
	
	<div class="container">
						<?php 
if (isset($_GET['id'])) {
	
	$select = $_GET['id'];
	// echo $select;
	$slct = "SELECT * FROM `contentupload` WHERE id = '$select'";
	$res = mysqli_query($conn, $slct);
}?>
		<div class="row m-0">	
			<div class="col-md-4">
<?php
	while ($rows = mysqli_fetch_array($res)) {
		
	
?>				
				<img src="uploaded/<?php echo $rows['upl_img'] ?>" class="img-fluid" alt="Card Image" />
			</div>
			<div class="col-md-8 content_disp">
				<div class="p-2">
				<h2>Company Details</h2>
				</div>
				<table class="table">
				<tr>
					<th>Company Name</th>
					
					<td colspan="2"><?php echo $rows['upl_company'] ?></td>
				</tr>
				<tr>
					<th>Contact Person</th>
					
					<td><?php echo $rows['upl_cnt_person']; ?></td>
				</tr>
				<tr>
					<th>Designation</th>
					
					<td><?php echo $rows['upl_desig']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					
					<td><?php echo $rows['upl_email']; ?></td>
				</tr>
				<tr>
					<th>Phone No</th>
					
					<td><?php echo $rows['upl_num']?></td>
				</tr>
				<tr>
					<th>Telephone No</th>
					
					<td><?php echo $rows['upl_tel']?></td>
				</tr>
				<tr>
					<th>Website</th>
					
					<td><?php echo $rows['upl_website']?></td>
				</tr>	
				<tr>
					<th>Category</th>
					
					<td><?php echo $rows['upl_select']?></td>
				</tr>
				<tr>
					<th>Address</th>
					
					<td><?php echo $rows['upl_address']?></td>
				</tr>
				</table>


				
				<?php 
};

				?>
			
			</div>
		</div>
	</div>
</main>
<footer class="fixed-bottom p-4 text-center">Designed And Developed By Abdul Rafay</footer>
<?php 
include 'scripts.php';
?>
</body>
</html>