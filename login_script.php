<?php
    require "includes/common.php";
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = md5(mysqli_real_escape_string($link,$_POST['password']));
    echo $password;
    $query = "select * from users where email = '$email'";
    $query_result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($query_result);
    if($rows == 0){
        header ('location:' . $_SERVER['HTTP_REFERER'] . '?email_error=Email incorrect!');
    }else{
        $data = mysqli_fetch_array($query_result);
        if($password == $data['password']){
            $_SESSION['email'] = $data['email'];
            $_SESSION['id'] = $data['id'];
            header("location: home.php");
        }else{
            header ('location:' . $_SERVER['HTTP_REFERER'] . '?password_error=Password incorrect!');
        }
    }
?>