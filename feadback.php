<?php
  if (isset($_POST['submit_btn'])) {
    $to = "karagodini@yandex.ru";
    $from = "karagodini@yandex.ru";
    $subject = "Новая заявка на сайте"; // Тема присылаемого письма
    $message = "На сайте была заполнена форма обратной связи"."\r\n"
      // Если вы изменяли поля формы, внесите изменения ниже
      ."<b>Тема:</b> ".$_POST['theme']."\r\n"
      ."<b>Name:</b> ".$_POST['name']."\r\n"
      ."<b>E-Mail:</b> ".$_POST['email']."\r\n"
    $headers = "From: ".$from."\r\nContent-type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
  }
?>