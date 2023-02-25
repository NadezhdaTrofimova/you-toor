<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

/* $name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);

$name = urldecode($name);
$phone = urldecode($phone);

$name = trim($name);
$phone = trim($phone);*/

echo $name;
echo "<br>";
echo $phone;

/*mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n");

if (mail("example@mail.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}*/

?>

