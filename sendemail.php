<?php
$recepient = "matvienkoigor956@gmail.com";
$sitename = "Work & Jobs";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nEmail: $email \nТекст: $text";

$pagetitle = "Сообщение с сайта: \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>