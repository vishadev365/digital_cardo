<?php
include('smtp/PHPMailerAutoload.php');

echo smtp_mailer('vishadev143@gmail.com','Subjectdgsdgsd','777888');
// $to="vishadev143@gmail.com";
// $subject="Verify OTP";
// $msg="OTP-".rand(111111,999999);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 2; 
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
		return 'Sent';
	}
}
?>