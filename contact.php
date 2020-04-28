<?php
    require "includes/common.php";
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
    <title>24 X 7 Support for you</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <h2>LIVE SUPPORT</h2>
             <p>24 hours | 7 days a week | 365 days a year Live Technical Support</p>
             <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product's availability and pricing at different e-retailers.
             </p>
            </div>
            <div class="col-sm-3">
                <img src="img/support.jpg" alt="support image" width=90% height=90%>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
            <h2>Contact Us</h2>
            <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control input-md" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control input-md" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" class="form-control input-md" required rows="6" style="resize:none;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <h3>Company Information:</h3>
                <p>500 Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)222 666 444<br>Fax:(000) 000 00 00 0<br>Email:info@mycompany.com<br>Follow on:Facebook, Twitter</p>
            </div>
        </div>
    </div>
    <?php if(!isset($_SESSION['email'])){
        require "includes/login.php"; }?>
    <?php include "includes/footer.php" ?>
</body>
</html>