<?php
/*Look back at the method to post in the contact.html */
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
/*create these variables to send to the email*/
$email_from = 'braydenlee@college.harvard.edu';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "user Email: $email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'braydenlee@college.harvard.edu';
$header = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
/*Send the email to the email with all the information the user put down*/
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
