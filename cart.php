<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $query = "select p.id, p.name,  p.price from products p inner join user_items ut on ut.product_id = p.id inner join users u on ut.user_id = u.id and status = 'Added to Cart'";
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
    <title>Your Lifestyle Cart</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="container-fluid">
    <?php
            if($rows == 0 ){
                echo'<center> <h1><a href="home.php"> Add </a>items to the cart first.</h1> </center>';
            }else{
                $sum = 0;
                $id=array();
        ?>
    <div class="col-sm-6 col-sm-offset-3">
        <table class="table table-striped">
            <tbody>
                <tr></tr>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <tr></tr>
                <tr></tr>
                <?php 
                    while($data = mysqli_fetch_array($query_result)){ 
                        $sum = $sum + $data['price'];
                        array_push($id,$data['id'])
                        ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td>Rs<?php echo $data['price']; ?> /-</td>
                    <td><a href='cart_remove.php?id=<?php echo $data['id']; ?>'>Remove</a></td>
                </tr>
                    <?php } $id=implode(', ',$id) ?>
                <tr>
                    <td></td>
                    <td><b>Total<b></td>
                    <td>Rs<?php echo $sum ?>/-</td>
                    <td><a href='success.php?id=<?php echo $id ?>' class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </tbody>
        </table>
                    <?php } ?>
</div>
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>