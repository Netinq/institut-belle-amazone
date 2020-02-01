<?php
$to = 'belamazone@orange.fr';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];

$email_subject = "Contact automatique : $name";
$email_body = "
Vous avez été contacté par : $name \n
Son message : $text \n\n
Ses coordonneés : \n
E-Mail : $email \n
Numéro : $phone
";
$headers = "From: $to\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
?>