<?php
$name = $_POST["fname, lname"];
$subject = $_POST["subject"];
$message = $_POST["message"];
?>
<?php
$email_from = "daylan.merritt@gmail.com";
$email_subject = "Form Submission";
$email_body = "You have recieved a messgage from $name.\n"
"Here is the massage:\n $message".;
?>

<?php
$to = "daylan.merritt@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>