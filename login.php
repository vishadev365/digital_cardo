<?php include ('include/header.php') ?>

<div class="container">
<div class="row">
<div class="col-md-12" style="padding-top:30px;">
<div class="content-box" align="center" style="padding:15% 0px 15% 0px ;">

<h1>Login</h1>
<h4>Enter your Email ID to login</h4>
<form>
<input type="email" class="form-control email" />
<br />
<button type="button" value="Submit" class="btn btn-form btn-primary btn-block btn-lg continue">Continue</button>
</form>

</div>

</div><!-- //col-md-12  -->
</div><!-- // row -->



<!--  -->

</div>

<?php include ('include/footer.php') ?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script>
	$(document).on('click','.continue',function(){
       
       var email=$('.email').val();
		// alert(email);
       $.ajax({
       	url:'test.php',
       	type:'POST',
       	data:{email:email},
        // dataType : 'json',
       success:function(res){
       		console.log(res);

            window.location.href='otp_verify.php';
            }
       });
	});
</script>

