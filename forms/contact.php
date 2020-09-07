<?php 
$mail = new Nette\Mail\Message;
$mail->setFrom($_GET['email'])
    ->addTo('yusufmawahid100@gmail.com')
    ->setSubject($_GET['subject'])
    ->setBody($_GET['message']);

$mailer = new Nette\Mail\SendmailMailer;
$mailer->send($mail);

?>