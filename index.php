<?php
session_start();
include 'header.php';

?>
<?php
// session_start();
// include("controllers/config.php");
if (!isset($_SESSION['p_name'])){
    echo "Entered Wrong Password";
    header('location:login.php');
}

?>


<?php
include("controllers/config.php");
 ?>
<?php
 if (isset($_SESSION['id'])) {
    $sl_get  = $_SESSION['id'];
}
?>


<style type="text/css">
    tr[data-href]{
        cursor: pointer;
    }
    tr[data-href]:hover{
        font-weight: 500;
    }
</style>
<main>

    <div class="container">
        <div class="main_heading">
        <h1>Hello <?php echo $_SESSION['p_name'] ?></h1>
    </div>
    <div class="filter_content p-2 mt-4">
        <form method="post">
            <div class="row m-0 align-items-center">
                <div class="col-2">
            <div class="form-group">
                <label for="">Search Using Field</label>
                <select name="" id="" class="form-control select2">
                    <option value="">All</option>
                    <option value="">Plastic Printing</option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="">Type in To Search</label>
                <input type="search" name="searchByValue" placeholder="Search" id="" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <label for=""></label>
            <input type="submit" name="search" class="btn btn-secondary" value="Search">
        </div>
        </div>
        </form>
    </div>
    <div class="table-responsive">

        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
               <th>S.No</th>
               <th>Company Name</th>
               <th>Contact Person</th>
               <th>Designation</th>
               <th>Category</th>
               <th>Edit</th>
               <th>Delete</th>
            </thead>
            <tbody>

                 <?php
                 if ((isset($_POST['search']))) {
                    $searchByValue = $_POST['searchByValue'];

                  // echo $searchByValue;
    			$searchSelect = "SELECT * FROM `contentupload` where  upl_company LIKE '%$searchByValue%' AND user_id= $sl_get";
    			$filter_result = mysqli_query($conn, $searchSelect);
                while ($rows=mysqli_fetch_array($filter_result))
                {


                ?>

                <tr data-href="content_preview.php?id=<?php echo $rows['id'] ?>">

                <td>
                    <?php echo $rows['id']; ?>
                </td>
                <td>
                    <?php echo $rows['upl_company'] ?>
                </td>
                <td>
                    <?php echo $rows['upl_cnt_person'] ?>
                </td>
                <td>
                    <?php echo $rows['upl_desig']; ?>
                </td>
                <td>
                    <?php echo $rows['upl_select'] ?>
                </td>
                <td><a href="upload.php?id=<?php echo $rows['id'] ?>">Edit</a></td>
                <td><a href="controllers/delete.php?id=<?php echo $rows['id'] ?>">Delete</a></td>
                </tr>

            <?php
            }

                  } else{

                    // echo $_SESSION['id'];

                $slct = "SELECT * FROM `contentupload` where user_id = '$sl_get'";
                $res = mysqli_query($conn, $slct);

                                      // echo $_SESSION['id'];

                // echo $_SESSION['user_id'];


                while ($rows=mysqli_fetch_array($res))
                {


                ?>

                <tr data-href="content_preview.php?id=<?php echo $rows['id'] ?>">

                <td>
                    <?php echo $rows['id']; ?>
                </td>
                <td>
                    <?php echo $rows['upl_company'] ?>
                </td>
                <td>
                    <?php echo $rows['upl_cnt_person'] ?>
                </td>
                <td>
                    <?php echo $rows['upl_desig']; ?>
                </td>
                <td>
                    <?php echo $rows['upl_select'] ?>
                </td>
                <td><a href="upload.php?id=<?php echo $rows['id'] ?>">Edit</a></td>
                <td><a href="controllers/delete.php?id=<?php echo $rows['id'] ?>">Delete</a></td>
                </tr>

            <?php
            }

                  }
               ?>
            </tbody>
        </table>
    </div><!--Table Responsive -->

    </div>

</div>
</main>

<footer>

</footer>
   <?php
   include 'scripts.php';
   ?>

</body>
</html>
