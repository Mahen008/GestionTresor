<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php include("partials/header.php"); ?>
<body>
  <div class="main-wrapper account-wrapper" style="background-color:#1C1B1E;" >
    <div class="account-page">
      <div class="account-center">
        <div class="account-box" style="background-color: #374850;">
          <form class="login-form" action="<?php echo base_url()?>authentification/signin" method="POST">
            <div class="account">
              <center>
                <a href="#"><img src="<?php echo base_url()?>assets/img/republique.png?>" alt=""></a>
              </center>
            </div>
              <?php if($msg = $this->session->flashdata('message')): ?>
                <div class="btn-danger active text-white" style="line-height: 30px;" align="center">
                  <?php echo $msg;?>
                </div>
              <?php endif; ?> 
                  <div class="form-group">
                      <input type="text" name="log" class="form-control" placeholder="Login">
                        <span class="text-danger"><?php echo form_error("log");?></span>
                  </div>
                  <div class="form-group">
                      <input type="password" name="pass" class="form-control" placeholder="Password">
                        <span class="text-danger"><?php echo form_error("pass");?></span>
                  </div>
                     
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary account-btn">SE CONNECTER</button>
                    </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include('partials/footer.php');?>
<!-- login23:12-->
</html>