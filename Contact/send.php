<?php

$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];

if ($name == "") {
    header('location: contatti.php?email_non_inviata');
    die();
}

$to = "gekowrappingtest@gmail.com";
$subject = "Email da Geko-Wrapping";
$message = "
<h1>Messaggio dal sito:</h1>
<br>
<b>MESSAGGIO:</b>
".$message."
<br><br>
<b>NOME:</b>
".$name."
<br>
<b>COGNOME:</b>
".$surname."
<br>
<b>NUMERO DI TELEFONO:</b>
".$number."
<br>
<b>EMAIL:</b>
".$email."
<br>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";

if(mail($to, $subject, $message, $headers)){
    header('location: contatti.php?invio=ok');
    die();
} else {
    header('location: contatti.php?invio=no');
    die();
}
