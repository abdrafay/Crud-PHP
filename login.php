<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row m-0 justify-content-center align-items-center">
            
            <div class="login_form"> 
                <div class="text-center">
                <h1>Login</h1>
            </div>
                <form action="controllers/validation.php" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="p_name" placeholder="Enter Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" name="" placeholder="Enter Password" id="">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-secondary" name="login" value="Login">
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