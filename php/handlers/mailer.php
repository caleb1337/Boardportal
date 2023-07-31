<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require $_SERVER["DOCUMENT_ROOT"].'/boardportal/ROOT_PATH.php';


require ROOT_PATH . '/vendor/phpmailer/src/Exception.php';
require ROOT_PATH . '/vendor/phpmailer/src/PHPMailer.php';
require ROOT_PATH . '/vendor/phpmailer/src/SMTP.php';
require ROOT_PATH . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

function sendMail($useremail,$hash_link){
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'Введите сюда свой эмейл';                     //SMTP username
        $mail->Password   = 'Ваш пароль приложения для почты';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('boardportal@notifications.com', 'Mailer');
        $mail->addAddress('Введите сюда эмейл получателя');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content

        $ref_link = "http://localhost/boardportal/{$hash_link}";
        
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Подтвердите ваш адрес электронной почты";
        $mail->Body    = "Здравствуйте! Просьба подтвердить ваш адрес электронной почты на портале boardportal <a href={$ref_link}>Пройдите для подтверждения</a>";
        $mail->AltBody = "Здравствуйте! Просьба подтвердить ваш адрес электронной почты на портале boardportal Ссылка:{$ref_link}";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


