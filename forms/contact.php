<?php 
$mail = new Nette\Mail\Message;
$mail->setFrom($_POST['email'])
    ->addTo('yusufmawahid100@gmail.com')
    ->setSubject($_POST['subject'])
    ->setBody($_POST['message']);

$mailer = new Nette\Mail\SendmailMailer;
$mailer->send($mail);

?>