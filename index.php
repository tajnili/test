<?php
//test
require('class.phpmailer.php');
$mail=new PHPMailer();
$mail->CharSet = 'UTF-8';
$body = '<P dir=rtl><FONT size=2 face=”tahoma”>سلام !</FONT></P>';
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->Username = 'sedghi.amin@gmail.com';
$mail->Password = 'tfzmvxpectwsbuby';
$mail->From = 'info@siteto.ir';
$mail->FromName = 'حاج امین';
$mail->Subject = 'تست';
$mail->MsgHTML($body);
$mail->AddAddress('taj.nili@gmail.com', 'کامران');
$mail->addAttachment('images/arrow.png');
if($mail->Send())
echo 'send';
else
echo 'failed';
?>