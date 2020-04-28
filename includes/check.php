<?php
    function check($item_id){
        global $link, $_SESSION;
        $user_id = $_SESSION['id'];
        $query = "select * from user_items where product_id='$item_id' and user_id='$user_id' and status='Added to Cart'" or die(mySqli_error($link));
        $query_result = mysqli_query($link, $query);
        $rows_fetched = mysqli_num_rows($query_result);
        if($rows_fetched >= 1){
            return 1;
        }else{
            return 0;
        }
    }
?>