<?php


include('smtp/PHPMailerAutoload.php');
$to=$_POST['email'];
// $to='vishadev143@gmail.com';
$subject="Verify OTP";
$msg="Your OTP-".rand(111111,999999);
echo smtp_mailer($to,$subject,$msg);
// echo smtp_mailer('vishadev143@gmail.com','Subjectdgsdgsd','777888');

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	// $mail->SMTPDebug = 2; 
	$mail->Username = "vishadev44@gmail.com";
	$mail->Password = "rygv oozj ozjh mzlj";
	$mail->SetFrom("vishadev44@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
       include 'include/db.php' ;
		session_start(); 

		$get_otp=explode('-', $msg);
		$sent_otp=$get_otp[1];
		$_SESSION["OTP"]=$sent_otp;
		$_SESSION["email"]=$to;

		 date_default_timezone_set('Asia/Calcutta'); 
         $create_date_time=date('Y-m-d H:i:s');

         $chk_email=mysqli_query($conn,"SELECT * FROM `user_login` WHERE `email`='$to'");

         if(mysqli_num_rows($chk_email)>0){
           $row_email=mysqli_fetch_assoc($chk_email);
        
           	mysqli_query($conn,"UPDATE `user_login` SET `otp`='$sent_otp' WHERE `email`='$row_email[email]'");
  
         }else{

         	 mysqli_query($conn,"INSERT INTO `user_login`(`email`, `otp`, `create_date_time`) VALUES ('$to','$sent_otp','$create_date_time')");

           	
           	
     
         }
         




	}
}
?>