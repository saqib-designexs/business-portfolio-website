<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set up the recipient and sender
$to = 'contact@designexs.com';
$from = 'contact@designexs.com';

// Create email headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Compose the email body
$body = "<h2>New Message from the Contact Form</h2>";
$body .= "<p><strong>Name:</strong> $name</p>";
$body .= "<p><strong>Number:</strong> $number</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Subject:</strong> $subject</p>";
$body .= "<p><strong>Message:</strong></p>";
$body .= "<p>$message</p>";

// Send email to your Gmail account
mail($to, $subject, $body, $headers);

// Compose the confirmation email body
$confirmationSubject = "Thank you for contacting us!";
$confirmationBody = "Dear $name,<br><br>";
$confirmationBody .= "Thank you for reaching out to us. We have received your message and will get back to you shortly.<br>";

// Send confirmation email to the user
mail($email, $confirmationSubject, $confirmationBody, $headers);
?>