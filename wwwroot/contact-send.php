<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include("PHPMailer-master/src/Exception.php");
include("PHPMailer-master/src/PHPMailer.php");
include("PHPMailer-master/src/SMTP.php");

date_default_timezone_set('Asia/Tokyo');

try {
	$mail = new PHPMailer(true);
	$mail->CharSet = "UTF-8";
	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = "admin@verimas.co.jp";
	$mail->Password = "ytwiawqiluruqhap";
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom("admin@verimas.co.jp", '株式会社ヴェリマス');
	
	$mail->addAddress('admin@verimas.co.jp');
	
	if (empty($_POST['contact_email'])) {
    	$mail->addReplyTo("admin@verimas.co.jp", '株式会社ヴェリマス');
    }
    else
    {
    	$mail->addReplyTo($_POST['contact_email'], $_POST['contact_name'] . "様");
    }

   	$mail->Subject = "Webからの問い合わせ - " . $_POST['contact_type'] . " @ " . date('Y-m-d H:i:s');

	$mail->AltBody = "x";
	
	$adstr1 = "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>";
	$svrinfo = "<br><br>This mail sent by Kubernetes container " . getenv('HOSTNAME');
	$mailbody = nl2br("問い合わせ内容<br>" . $adstr1 . "名前: " . $_POST['contact_name'] . " <br>" . "E-Mail:" . $_POST['contact_email'] . ' <br>' . '電話番号:' . $_POST['contact_phone'] . ' <br>' . '内容:' . $_POST['contact_message'] . " <br>" . $adstr1 . $svrinfo);
	$mail->MsgHTML($mailbody);

	$mail->send();
} 
catch (Exception $e) 
{
	echo 'Error while sending Email: ', $mail->ErrorInfo;
}


