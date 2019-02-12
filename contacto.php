<?php

$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";


$mail="hola@exemontenegro.cl";

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$thank="gracias.html";



$mensaje = "

Nombre:".$name."

Email:".$email."

Mensaje:".$message.""
;




if (mail($mail,"Contacto desde la Web",$mensaje,"From:$email\r\nBounce-to: hola@exemontengro.cl ") ) 

Header ("Location: $thank");






//mail( $mail, "Contacto desde la web", $asunto, "From: $email" );

//header("Location: $thank");

exit; 



//if (mail($email,"Contacto Ditto",$message,"From:$email\r\nBounce-to: contacto@micoffee.cl ") ) 

//Header ("Location: $thank");