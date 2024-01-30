<?php include ('include/header.php') ?>
<?php include ('include/db.php') ?>

  <?php 
    // session_start(); 
  
    // Retrieving otp with session variable 
     $otp=$_SESSION["OTP"]; 
     $email=$_SESSION["email"]; 
    
    $error="";
     if(isset($_POST['verify_otp'])){
      $email=$_POST['email'];
      $otp=$_POST['otp'];

      $chk_otp=mysqli_query($conn,"SELECT * FROM `user_login` WHERE `otp`='$otp'");

         if(mysqli_num_rows($chk_otp)>0){
           $row_otp=mysqli_fetch_assoc($chk_otp);
           if($row_otp['otp']==$otp){
            header('location:user_form.php');
           }else{
            $error="Invalid OTP..";
           }
           
         }else{
           $error="Invalid OTP..";
           
         }


 

     }
  ?> 

<div class="container">
<div class="row">
<div class="col-md-12" style="padding-top:30px;">
<div class="content-box" align="center" style="padding:15% 0px 15% 0px ;">

<h1>OTP Verify</h1>
<h4 class="text-success">Enter your Email OTP</h4>
<form action="otp_verify.php" method="POST">
<input type="number" name="otp" class="form-control otp"  value="<?php if (isset($otp)) {
 echo $otp;
} ?>" />
<h6 class="text-danger"><?php if (isset($error)) {
 echo $error;
} ?></h6>


<input type="hidden" name="email" value="<?php if (isset($email)) {
 echo $email;
} ?>">
<br />
<button type="submit" value="Submit" name="verify_otp" class="btn btn-form btn-primary btn-block btn-lg verify_otp">Verify OTP</button>
</form>

</div>

</div><!-- //col-md-12  -->
</div><!-- // row -->



<!--  -->

</div>

<?php include ('include/footer.php') ?>
<script type="text/javascript" src="assets/js/jquery.js"></script>


