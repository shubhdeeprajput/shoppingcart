<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query = "insert into user_items(user_id,product_id,status) values('$user_id','$product_id','Added to Cart')";
    $query_result = mysqli_query($link, $query) or die(mysqli_error($link));
    header('location: home.php');
?>
