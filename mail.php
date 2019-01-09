<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/');
$twig = new Twig_Environment($loader);


$mail = $_POST['email'];
$submit = $_POST['submit'];
$global = $twig;

// $to = $mail;
// $subject = "Quelqu'un vous a envoyé une carte de voeux";
// $message = $twig->render('mail.html.twig');
// $headers = 'From: bonne@annee.com' . "\r\n" .
// 'Reply-To: noreply.bonne@annee.com' . "\r\n" .
// 'MIME-Version: 1.0' . "\n" .
// 'Content-Type: text/html; charset=UTF-8' . "\n" .
// 'X-Mailer: PHP/' . phpversion();
$to      = $mail;
$subject = 'coucou';
$message = 'hello';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

?> 