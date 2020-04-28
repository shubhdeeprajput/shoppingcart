<?php
    require "includes/common.php";
    require "includes/check.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $query = "select * from products";
    $query_result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($query_result);
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
    <title>Home|Lifestyle Store</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container">
        <?php
        while($data = mysqli_fetch_array($query_result)){ 
            if($rows % 4 == 0){ ?>
               <div class="row">
        <?php } ?>
                    <div class="col-sm-3 col-xs-6">
                    <div class="thumbnail">
                        <?php if($data['id'] > 15) { ?>
                            <img src='img/<?php echo $data['id']; ?>.jpeg' alt='xyz..'>
                        <?php }else{ ?>
                        <img src="img/<?php echo $data['id']; ?>.jpg" alt="xyz.."> <?php } ?>
                        <div class="caption">
                            <center>
                                <h4>
                                    <?php echo $data['name']; ?>
                                </h4>
                                <p style="overflow:hidden">
                                    Price:Rs.<?php echo $data['price']; ?>
                                </p>
                                <?php
                                    if(check($data['id'])){ ?>
                                    <a href="" class="btn btn-primary btn-block" disabled>
                                    Added to Cart
                                    </a> <?php }else{ ?>
                                <a href="cart_add?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-block">
                                    Add to Cart
                                </a>
                                    <?php } ?>
                            </center>
                        </div>
                    </div>
                  </div>
        <?php   
            $rows--;
            if($rows % 4 == 0){ 
                echo'</div>'; } 
                 }?>
        </div>
    <?php include "includes/footer.php" ?>
</body>
</html>