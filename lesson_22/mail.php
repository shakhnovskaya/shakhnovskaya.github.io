<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

//Тут указываем на какой ящик посылать письмо
$to = "svetik_xomya4ok@mail.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с моего первого сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($name)."<br />
Email:".htmlspecialchars($email)."<br />
Пароль:".htmlspecialchars($password);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <xomyak@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>