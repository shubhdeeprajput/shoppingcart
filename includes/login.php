<?php
    if(isset($_SESSION['email'])){
      header('location: home.php');
    }
?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLongTitle" style="display:inline"><b>User Login</b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:right">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="login_script.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control input-md " required>
                <?php if(isset($_GET['email_error'])){
                            echo"<p style='color:red'>" . $_GET['email_error'] . "</p>";
                        } ?>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control input-md" required>
                <?php if(isset($_GET['password_error'])){
                            echo"<p style='color:red'>" . $_GET['password_error'] . "</p>";
                        } ?>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
              </div>
            </form>
      </div>
      <div class="modal-footer">
      <p>
          Don't have an account?
          <a href="signup.php">Register</a>
      </p>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
  echo'<script type=text/javascript>';
  echo"function clk(){
         document.getElementById('login_btn').click();}";
    if(isset($_GET['password_error']) or isset($_GET['email_error'])){
      echo'clk();';
      unset($_GET['password_error']);
      unset($_GET['email_error']);
    }
  echo'</script>';
?>