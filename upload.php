<?php
session_start();
include("controllers/config.php");
if (!isset($_SESSION['p_name'])){
    echo "Entered Wrong Password";
    header('location:login.php');
}
?>
<?php 
include 'header.php';
?>
<style type="text/css">
    .main_heading {
        padding: 20px 10px;
    }

</style>
<main>
    
        
    <div class="upload_content">
        <div class="container">
        <div class="main_heading">
        <h1>Hello <?php echo $_SESSION['p_name']; ?></h1>
    </div>
<div class="row">
        <?php 
            if (isset($_GET['id'])) {
                 $id = $_GET['id'] ;
                // echo $id;
                 $slc = "SELECT * FROM `contentupload` WHERE id='$id' ";
                 $res = mysqli_query($conn, $slc);
                 while ($row = mysqli_fetch_array($res)) {
                        $_SESSION['id'] =$row['id'];
                        // echo $_SESSION['id'];

               ?>
                <div class="col-8" style="border-right: 2px solid;">
                     <form action="controllers/update.php" method="post" enctype="multipart/form-data">
                        <div class="text-center p-4">
        <h4>Please Fill The Form To Upload Data</h4>
    </div> 
            <div class="row m-0 justify-content-center text-center">

                <div class="col-4">
                    <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" value="<?php echo $row['upl_company'] ?>" name="upl_company" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" value="<?php echo $row['upl_cnt_person'] ?>" name="upl_cnt_person" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" value="<?php echo $row['upl_desig'] ?>" name="upl_desig" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" value="<?php echo $row['upl_email'] ?>" name="upl_email" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" value="<?php echo $row['upl_num'] ?>" name="upl_num" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" value="<?php echo $row['upl_tel'] ?>" name="upl_tel" class="form-control">
                </div>
                </div>
                
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="url" value="<?php echo $row['upl_website'] ?>" name="upl_website" name="" id="" class="form-control">
                    </div>
                </div>
                <!-- <div class="col-4">
                    <div class="form-group">
                        <label for="">Add new Field To Filter</label>
                        <input type="text" class="form-control">
                    </div>
                </div> -->
                <?php 
                include 'controllers/config.php';
                $slct = "SELECT * FROM `categories`";
                $slc_result = mysqli_query($conn, $slct);
                ?>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="upl_select" id="" class="form-control">
                           <option value="All">All</option>
                           <option ></option>
                            <?php 
                                while ($rows=mysqli_fetch_array($slc_result)) {
                            ?>
                            <option value="<?php echo $rows['category'] ?>"><?php echo $rows['category'] ?></option>
                            <?php 
                            }      
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="upl_address" id="" class="form-control" cols="30" rows="3"><?php echo $row['upl_address'] ?></textarea>
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Upload Image</label>
                    <img src="uploaded/<?php echo $row['upl_img'] ?>" class="img-fluid mb-4">
                    <input type="file" name="upl_img" id="">
                </div>
                </div>
                <div class="col-12">
                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </div>
            </div>
        </form>
        </div>


               <?php       
                 }
            }else{
                ?>
                    <div class="col-8" style="border-right: 2px solid;">
                     <form action="controllers/upl.php" method="post" enctype="multipart/form-data">
                        <div class="text-center p-4">
        <h4>Please Fill The Form To Upload Data</h4>
    </div> 
            <div class="row m-0 justify-content-center text-center">

                <div class="col-4">
                    <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" name="upl_company" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" name="upl_cnt_person" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" name="upl_desig" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="upl_email" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="upl_num" class="form-control">
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="upl_tel" class="form-control">
                </div>
                </div>
                
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="url" name="upl_website" name="" id="" class="form-control">
                    </div>
                </div>
                <!-- <div class="col-4">
                    <div class="form-group">
                        <label for="">Add new Field To Filter</label>
                        <input type="text" class="form-control">
                    </div>
                </div> -->
                <?php 
                include 'controllers/config.php';
                $slct = "SELECT * FROM `categories`";
                $slc_result = mysqli_query($conn, $slct);
                ?>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="upl_select" id="" class="form-control">
                           <option value="All">All</option>
                            <?php 
                                while ($rows=mysqli_fetch_array($slc_result)) {
                            ?>
                            <option value="<?php echo $rows['category'] ?>"><?php echo $rows['category'] ?></option>
                            <?php 
                            }      
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="upl_address" id="" class="form-control" cols="30" rows="3"></textarea>
                </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="">Upload Image</label>
                    <input type="file" name="upl_img" id="">
                </div>
                </div>
                <div class="col-12">
                <input type="submit" name="upl_submit" class="btn btn-primary">
            </div>
            </div>
        </form>
        </div>
                <?php
            }
        ?>
    
       
            
                

        <div class="col-4">
            <h4>Add Category</h4>
            <form method="post">
                <div class="form-group">
                
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="category">
                    <input type="submit" name="add_category" class="btn btn-secondary mt-2" value="Add Category">
                    
                </div>
            </form>
            <?php 
 if (isset($_POST['add_category'])) {
     
     $category = $_POST['category'];
     // echo $category;
     $sel = "SELECT * FROM `categories` WHERE category = '$category'";
     $res = mysqli_query($conn, $sel);
     if (mysqli_num_rows($res)!=1) {
     $ins = "INSERT INTO categories( category ) VALUES('$category')";
         mysqli_query($conn, $ins);
         // echo "Your Category Added Succesfully";
         // header("Location: ");
         echo "<meta http-equiv='refresh' content='0'>";
     }
     else
     {
      ?><div class="alert alert-danger" role="alert">
   <a href="#" class="alert-link">Category Already Exist</a>
    </div><?php
     };
 }
?>
        </div>

        </div>

        </div>
    </div>
    
    
</div>
</main>

<footer>

</footer>    
    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Scripts -->
</body>
</html>