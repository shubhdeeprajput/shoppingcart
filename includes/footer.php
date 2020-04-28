<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Information</h4>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </div>
            <div class="col-sm-4">
                <h4>My Account</h4>
                <?php if(isset($_SESSION['email'])){ ?> 
                    <a href="cart.php">Cart</a>
                    <a href="settings.php">Settings</a>
                <?php }else{ ?>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                <a href="signup.php">Sign Up</a>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <p>Contact: +91 123 000000</p>
            </div>
        </div>
    </div>
</footer>