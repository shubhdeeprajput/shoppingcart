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
    <title>Lifestyle Store</title>
</head>
<body id="banner">
    <?php include "includes/header.php"; ?>
    <div class="container-fluid typewriter">
        <center><h1>Your Journey for different Lifestyle begins here...</h1>
        <h2>Check our collection of over thousands of products in all catagories</h2>
        </center>
        <br><br><br>
        <div class="row">
            <div class="col-sm-3">
                <center><h2>Watches</h2></center>
                <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/10.jpg" alt="watches" class="main_thumbnails"> </a>
            </div>
            <div class="col-sm-3">
            <center><h2>Shirts</h2></center>
            <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/13.jpg" alt="shirts" class="main_thumbnails"> </a>
            </div>
            <div class="col-sm-3">
            <center><h2>Cameras</h2></center>
            <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/5.jpg" alt="cameras" class="main_thumbnails"> </a>
            </div>
            <div class="col-sm-3">
            <center><h2>Sunglasses</h2></center>
            <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/17.jpeg" alt="cameras" class="main_thumbnails"> </a>
            </div>
</div>
<?php include "includes/login.php" ?>
    <?php include "includes/footer.php" ?>
</body>
</html>