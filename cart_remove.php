<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $user_id = $_SESSION['id'];
    $id = $_GET['id'];
    $query = "delete from user_items where product_id = '$id' and status = 'Added to Cart' and user_id = '$user_id'";
    $query_result = mysqli_query($link,$query)
    or die(mysqli_error($link));
    header('location:cart.php');
?>
