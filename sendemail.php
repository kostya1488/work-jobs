<?php
$recepient = "mail@ukrjob.org";
$sitename = "Work & Jobs";
$token = "1153545691:AAFG1V4rzA8b5sccN2F3mCYOcO8yfBN8nbU"; 
$chat_id = "-1001370283762";


$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nEmail: $email \nТекст: $text";

$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Сообщение' => $text
);
 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

$pagetitle = "Сообщение с сайта: \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient"); 

?>
