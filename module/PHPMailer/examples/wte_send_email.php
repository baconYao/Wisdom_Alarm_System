<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
function send_check_mail($user_email,$account,$code){
    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require 'module/PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    $mail->CharSet = "utf-8"; //郵件編碼

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "wteofficialmail@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "nchuwte2016";

    //Set who the message is to be sent from
    $mail->setFrom('wteofficialmail@gmail.com', 'WTE');

    //Set an alternative reply-to address
    $mail->addReplyTo('wteofficialmail@gmail.com', 'WTE');

    //Set who the message is to be sent to
    $mail->addAddress($user_email, $account);

    //Set the subject line
    $mail->Subject = 'WTE 會員認證信件';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //HTML 內容與其他頁面同一目錄
    // $mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));
    $mail->Body = '感謝您註冊WTE會員，請點選下列連結進行會員確認:<br>' . '<strong><a href="http://127.0.0.1/WTE_Server/web/checkmember.php?email=' . $user_email . '&code=' . $code . '">請點選我</a></strong>';
    $mail->IsHTML(true);

    //Replace the plain text body with one created manually
    $mail->AltBody = '感謝您註冊WTE會員，請點選下列連結進行會員確認: ' . 'http://127.0.0.1/WTE_Server/checkmember.php?email=' . $user_email . '&code=' . $code;

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        echo "mail_error";
        // . $mail->ErrorInfo;
    } else {
        echo "mail_success";
    }
}

?>
