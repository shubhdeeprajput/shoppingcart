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
    <title>About Us | Our journey to where we are</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container">
        <div class="col-md-8">
            <img src="img/about.jpeg" alt="about image" style=" overflow: hidden; width: 50%; height: 50%; float:left; margin-right:15px"> 
            <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product's availability and pricing at different e-retailers. As of 2020, customers can shop online using a range of different computers and devices, including desktop computers, laptops, tablet computers, smartphones, and smart speakers.
An online shop evokes the physical analogy of buying products or services at a regular "bricks-and-mortar" retailer or shopping center; the process is called business-to-consumer (B2C) online shopping. When an online store is set up to enable businesses to buy from another businesses, the process is called business-to-business (B2B) online shopping. A typical online store enables the customer to browse the firm's range of products and services, view photos or images of the products, along with information about the product specifications, features and prices.

Online stores usually enable shoppers to use "search" features to find specific models, brands or items. Online customers must have access to the Internet and a valid method of payment in order to complete a transaction, such as a credit card, an Interac-enabled debit card, or a service such as PayPal. For physical products (e.g., paperback books or clothes), the e-tailer ships the products to the customer; for digital products, such as digital audio files of songs or software, the e-tailer usually sends the file to the customer over the Internet. The largest of these online retailing corporations are Alibaba, Amazon.com, and eBay.[1]</p>
        </div>
        <div class="col-md-4">
            <ol><h3>Available Roles</h3>
                <li>
                    Jr./Sr. Web Developer [Full Time Role + also available as a 6 months internship]
                </li>
                <li>
                    Business Apprentice [6 months internship]
                </li>
                <li>
                    Manager at backend operations [Full Time role + also available as a 6 months internship]
                </li>
            </ol>
        </div>
    </div>
    <?php if(!isset($_SESSION['email'])){
        require "includes/login.php"; }?>
    <?php require "includes/footer.php" ?>
</body>
</html>