<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "smpg.sjkim@google.com";
$subject = "Mail from website";

$headers = "From: ".$name. "\r\n" .
$txt = "You have received an email from ".$name ."\r\nEmail: " .$email ."\r\n
Message: ". $message;

if($email!=NULL) {
  mail($to, $subject, $txt, $headers);
}

header('Location: THankyou.html');

?>