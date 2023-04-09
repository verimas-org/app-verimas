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
	$mail->Username = "info@bk-sys.co.jp";
	$mail->Password = "infom1210";
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom("info@bk-sys.co.jp", '株式会社ブレーカーシス');
	
	$devflag = "";
	if (empty(getenv('BKSYSDEVMODE'))) { 
		$mail->addAddress('maojunfeng@bk-sys.co.jp');
	}
	else {
		$devflag = "【開発版】";
	}
	$mail->addAddress('admin@bk-sys.co.jp');
	
	if (empty($_POST['email'])) {
    	$mail->addReplyTo("info@bk-sys.co.jp", '株式会社ブレーカーシス');
    }
    else
    {
    	$mail->addReplyTo($_POST['email'], $_POST['name'] . "様");
    }
    
    if (empty($_POST['type'])) {
    	$mail->Subject = $devflag . "Webからの問い合わせ @ " . date('Y-m-d H:i:s');
    }
    else
    {
    	$mail->Subject = $devflag . $_POST['type'] . "に関しての問い合わせ @ " . date('Y-m-d H:i:s');
    }
    
	$mail->AltBody = "x";
	
	$adstr1 = "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>";
	$svrinfo = "<br><br>This mail sent by Kubernetes node " . getenv('HOSTNAME');
	$mailbody = nl2br($devflag . "問い合わせ内容<br>" . $adstr1 . "名前: " . $_POST['name'] . " <br>" . "タイトル: " . $_POST['title'] . " <br>" . "E-Mail:" . $_POST['email'] . ' <br>' . '電話番号:' . $_POST['phone'] . ' <br>' . '内容:' . $_POST['note'] . " <br>" . $adstr1 . $svrinfo);
	$mail->MsgHTML($mailbody);

	$mail->send();
} 
catch (Exception $e) 
{
	echo 'Error while sending Email: ', $mail->ErrorInfo;
}


