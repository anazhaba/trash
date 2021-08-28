<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("anazhaba@yandex.ru", "stoad.ru заказ", "Имя: ".$fio.". Сообщение: ".$email ,"From: info@stoad.ru \r\n"))
 {     echo "Молодец, ты отправил мне письмо!";
} else {
    echo "Ты сделал что-то не так, попробуй еще раз :(";
}?>