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
    
    $mail->Subject = $devflag . "Webからの応募 @ " . date('Y-m-d H:i:s');
    
	$mail->AltBody = "x";
	
	if(isset($_FILES['file1'])  && $_FILES['file1']['error'] == UPLOAD_ERR_OK){
        $mail->AddAttachment($_FILES['file1']['tmp_name'],$_FILES['file1']['name']);
    }
    if(isset($_FILES['file2'])  && $_FILES['file2']['error'] == UPLOAD_ERR_OK){
        $mail->AddAttachment($_FILES['file2']['tmp_name'],$_FILES['file2']['name']);
    }
	
	$adstr1 = "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>";
	$svrinfo = "<br><br>This mail sent by Kubernetes node " . getenv('HOSTNAME');
	$mailbody = nl2br($devflag . "応募内容<br>" . $adstr1 . "名前: " . $_POST['name'] . " <br>" . "E-Mail:" . $_POST['email'] . ' <br>' . '電話番号:' . $_POST['phone'] . ' <br>' . '連絡事項:' . $_POST['note'] . " <br>" . $adstr1 . $svrinfo);
	$mail->MsgHTML($mailbody);

	$mail->send();
	
	if(isset($_FILES['file1'])  && $_FILES['file1']['error'] == UPLOAD_ERR_OK){
        unlink($_FILES['file1']['tmp_name']);
    }
    if(isset($_FILES['file2'])  && $_FILES['file2']['error'] == UPLOAD_ERR_OK){
        unlink($_FILES['file2']['tmp_name']);
    }
	
	echo 'HTTP_OK';
} 
catch (Exception $e) 
{
	echo 'Error while sending Email: ', $mail->ErrorInfo;
}
