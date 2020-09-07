<?php
$to = "yusufmawahid100@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From: ".$_POST['email'] . "\r\n" .
"CC: wahidajjah52@gmail.com";

mail($to,$subject,$txt,$headers);
?>