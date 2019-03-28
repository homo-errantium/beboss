<?php 
//Принимаем постовые данные
$name=$_POST['userName'];
$phone=$_POST['phone'];
$franshiza=$_POST['franshiza'];
//Тут указываем на какой ящик посылать письмо
$to = "news@beboss.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Имя франшизы: ".htmlspecialchars($franshiza)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: homoerrantium.sl <ayshat@homoerrantium.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
 ?>