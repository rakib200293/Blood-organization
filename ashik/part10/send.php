<?php

$to = "i.rakib7500@gmail.com";

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$sub = $_REQUEST['subject'];
$message = $_REQUEST['message'];


$msg  = "Name    :".$name."\n";
$msg .= "Phone   :".$phone."\n";
$msg .= "Message :".$message."\n";

$mail = mail($to,$sub,$msg);
header('location:index.php?success=Message Send Successfully !');

?>

