<?php
function sendMail($title, $content, $nTo, $mTo){
    $nFrom = 'namnhh';
    $mFrom = 'nam080695@gmail.com';  //dia chi email cua ban 
    $mPass = 'hoainam080695';       //mat khau email cua ban
    $mail = new PHPMailer();
    $body = $content;
    $mail->IsSMTP(); 
    $mail->CharSet = "utf-8";
    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;                    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";        
    $mail->Port = 465;
    $mail->Username = $mFrom;  // GMAIL username
    $mail->Password = $mPass;               // GMAIL password
    $mail->SetFrom($mFrom, $nFrom);
    $mail->Subject = $title;
    $mail->MsgHTML($body);
    $mail->AddAddress($mTo, $nTo);
    if(!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}
 
	//goi thu vien
    include('class.smtp.php');
    include "class.phpmailer.php"; 
 	//call sendMail
    $nTo = 'namnhh';
	$mTo = 'hoainam080695@gmail.com';
	$title = '滋賀県';
	$content = 'Hello 滋賀県,草津市,フェイシャル,エステサロン,ダイエット,発毛,育毛,美肌再生';
	echo "From: " . "nam080695@gmail.com" . "<br>" .
		 "To: ". $mTo . "<br>" .
		 "Subject: ". $title . "<br>" .
		 "Body: ". $content . "<br>";
	
    //test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo);
    if($mail == 1) {
    	echo 'Send mail sucess ';
	} else {
		echo 'Send mail fail';
	}
 
