<?php

   // Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// $to = 'planb_ltda@planbltda.cl';
$to = 'reinaldo@zetalabs.cl'
$subject = 'Nuevo contacto desde la web de PlanB Limitada';
$message = 'DE: '.$name.' Email: '.$email.'MENSAJE: '.$message;
$headers = 'From: reinaldo@zetalabs.cl' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Tu Email fue enviado correctamente, pronto nos contactaremos contigo!"; // success message
}else{
echo "Email invalido. Proporciona una direccion correcta!";
}
?>
