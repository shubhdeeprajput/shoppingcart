<?php
    require "includes/common.php";
    if(isset($_SESSION['email'])){
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Sign up to start fashion journey</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container-fluid">
        <div class="col-sm-5">
              <img src="img/signup.png" alt="signup image">
        </div>
        <div class="col-sm-5">
        <form action="signup_script.php" method="post">
            <h2>Sign Up</h2>
            <?php if(isset($_GET['form_error'])){
                            echo"<p style='color:red'>" . $_GET['form_error'] . "</p>";
                            unset($_GET['form_error']);
                        } ?>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control input-md" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control input-md" placeholder="Email" required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-md" placeholder="Password" required>
                        <?php if(isset($_GET['password_error'])){
                            echo"<p style='color:red'>" . $_GET['password_error'] . "</p>";
                            unset($_GET['password_error']);
                        } ?>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="contact" class="form-control input-md" placeholder="Contact" required pattern='[789][0-9]{9}'>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control input-md" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control input-md" placeholder="Address" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Sign up">
                    </div>
                </form>
        </div>
    </div>
    <?php include "includes/login.php" ?>
    <?php include "includes/footer.php" ?>
</body>
</html>