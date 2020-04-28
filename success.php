<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $ids = $_GET['id'];
    $ids = explode(', ',$ids);
    foreach($ids as $id){
        $query = "update user_items set status = 'Confirm' where product_id = '$id'" or die(mysqli_error($link));
        $query_result = mysqli_query($link, $query);
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
    <title>Order Placed Successfully!</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container-fluid">
    <center><h1><span class="glyphicon glyphicon-thumbs-up"></span> Your order is confirmed. Thank you for shopping with us. <br><a href="home.php">Click here</a> to purchase any other item.</h1></center>
    
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>