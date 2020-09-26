<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style type="text/css">
        body{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row m-0 justify-content-center align-items-center">
            
            <div class="login_form"> 
                <div class="text-center">
                <h1>Sign Up</h1>
            </div>
                <form action="controllers/registration.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter Name" name="p_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" placeholder="Company Name" name="company_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter Email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number" name="ph_number" placeholder="Enter Phone Number" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="c_password" placeholder="Enter Password" id="">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" name="register"  class="btn btn-secondary" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
   <!-- Scripts -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Scripts -->    
</body>
</html>