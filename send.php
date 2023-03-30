<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$name = $_POST['name'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$date = $_POST['date'];
$quantity_of_people = $_POST['quantity_of_people'];
$additional_wishes = $_POST['additional_wishes'];


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();        
    $mail->CharSet = "UTF-8"; 
    $mail->isHTML(true);                                
    $mail->Host       = 'ssl://smtp.gmail.com';               
    $mail->SMTPAuth   = true;                               
    $mail->Username   = 'trofimnad1991@gmail.com';                 
    $mail->Password   = 'fxijkgcibdueyvym';                         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
    $mail->Port       = 465;                                

    $mail->setFrom('trofimnad1991@gmail.com', 'yoo-tour');
    $mail->addAddress('yu_tour@mail.ru');  

    $mail->isHTML(true);                                 
    $mail->Subject = 'Заявка с сайта';
    $mail->Body    = "
                        <b>Имя:</b>  $name <br>
                        <b>Телефон:</b> $phone <br><br>
                        <b>Предполагаемая страна отдыха:</b> $country<br>
                        <b>Примерная дата начала путешествия:</b> $date<br>
                        <b>Сколько взрослых и детей поедет:</b> $quantity_of_people<br>
                        <b>Дополнительные пожелания:</b> $additional_wishes<br>";

    if(!$mail -> send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }
     
    if(isset($_POST["send"])) {
         exit('<meta http-equiv="refresh" content="0" />');
    }

?>