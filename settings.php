<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
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
    <title>User Settings</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container-fluid">
    <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel ">
                <h1>Change Password</h1>
                <form action="settings_script.php" method="post">
                    <div class="form-group">
                        <input type="password" name="old_password" class="form-control input-md" placeholder="Old Password" required>
                        <?php if(isset($_GET['password_error'])){
                            echo"<p style='color:red'>" . $_GET['password_error'] . "</p>";
                            unset($_GET['password_error']);
                        } ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="new_password" class="form-control input-md" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="re_new_password" class="form-control input-md" placeholder="Re-type New Password" required>
                        <?php if(isset($_GET['new_password_error'])){
                            echo"<p style='color:red'>" . $_GET['new_password_error'] . "</p>";
                            unset($_GET['new_password_error']);
                        } ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Proceed">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>