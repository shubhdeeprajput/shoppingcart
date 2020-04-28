<?php
    require "includes/common.php";
    $name = mysqli_real_escape_string($link,$_POST['name']);
    echo strlen($name);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    if(strlen($password) < 6){
        header('location: signup.php?password_error=Password too short.');
    }else{
    $password = md5($password);
    $contact = mysqli_real_escape_string($link,$_POST['contact']);
    $city = mysqli_real_escape_string($link,$_POST['city']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
    if(strlen($name) == 0 or strlen(city) == 0 or strlen(city) == 0 or strlen($address) == 0){
        header('location: signup.php?form_error=Please fill the form completely.');
    }else{
    $query = "select * from users where email='$email'";
    $query_result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($query_result);
    if($rows == 0){
        $query = "insert into users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";
        $query_result = mysqli_query($link, $query);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($link);
        header("location: home.php");
    }else{
        header('location: signup.php?email_error=Email already taken!');
    }}}
?>