<nav class="navbar navbar-inverse navbar-fixe-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
           </button>
            <a href="index.php" class="navbar-brand">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <?php
               if(isset($_SESSION['email']))
                { ?>
                <li><a href="cart.php" class="navbar-brand "><span
                class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                <li><a href="settings.php" class="navbar-brand"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                <li><a href="logout.php" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            <?php
                }else
                    { ?>
                <li><a href="about.php" class="navbar-brand"><span class="glyphicon glyphicon-align-justify"></span> About Us</a></li>
                <li><a href="contact.php" class="navbar-brand"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                <li><a href="signup.php" class="navbar-brand "><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="" class="navbar-brand" id="login_btn" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php 
               }?>
            </ul>
        </div>
    </div>
</nav>
