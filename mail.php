<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adult = $_POST['adult'];
$child = $_POST['child'];
$date = $_POST['date'];
$date = $_POST['date'];

$to = "nazimabbas4343@gmail.com";


$subject = "Mail From shortstay";
$txt = "Name = ". $name . "\r\n Email = ".$email . "\r\n Phone =" .$phone ."\r\n Adult =" .$adult."
\r\n Child =" .$child ."\r\n In Date =" .$date ."\r\n Out Date =" .$date ."


$headers = "From: shortstay@gmail.com" ."\r\n".
"CC: somebodyelse@example.com";
if($email!=NULL){
     mail($to,$subject,$txt,$headers);
}



//redirect
header("Location:thankyou.html");
?>