<?php 
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $user_id = $_SESSION['id'];
    $old_password = md5(mysqli_real_escape_string($link,$_POST['old_password'])) or die(mysqli_error($link));
    $new_password = md5(mysqli_real_escape_string($link,$_POST['new_password'])) or die(mysqli_error($link));
    $re_new_password = md5(mysqli_real_escape_string($link,$_POST['re_new_password'])) or die(mysqli_error($link));
    echo $user_id;
    $query = "select password from users where id='$user_id'";
    $query_result = mysqli_query($link, $query) or die(mysqli_error($link));
    $data = mysqli_fetch_array($query_result) or die("error ocuured");
    if($old_password != $data['password']){
        header('location: settings.php?password_error=Incorrect password!');
    }else{
        if($new_password != $re_new_password){
            header('location: settings.php?new_password_error=Password mismatch!');
        }else{
        $query = "update users set password='$new_password' where id='$user_id'";
        $query_result = mysqli_query($link, $query) or die(mysqli_error($link));
        header('location: home.php');
        }}