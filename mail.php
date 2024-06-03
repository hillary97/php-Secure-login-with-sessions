<?php
//get data from form  

$name = $_POST['uname'];
$email= $_POST['email'];
$message= "i am testing mail system";
$to = "hillarynthome97@gmail.com";
$subject = "Hillary portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: hillarynthome137@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:sendmail.php");
?>