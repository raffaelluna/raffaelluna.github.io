<?php

$errors = ”;

$myemail = ‘raffael.luna@gmail.com’;//<—–Put Your email address here. 

if(empty($_GET[‘name’]) ||

empty($_GET[’email’]) ||

empty($_GET[‘message’]))

{

$errors .= “\n Error: all fields are required”;

}

$name = $_GET[‘name’];

$email_address = $_GET[’email’];

$message = $_GET[‘message’];

if (!preg_match(

“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address))

{

$errors .= “\n Error: Invalid email address”;

}

if( empty($errors))

{

$to = $myemail;

$email_subject = “Contact form submission: $name”;

$email_body = “You have received a new message. “.

” Here are the details:\n Name: $name \n “.

“Email: $email_address\n Message \n $message”;

$headers = “From: $myemail\n”;

$headers .= “Reply-To: $email_address”;

mail($to,$email_subject,$email_body,$headers);


}

?>