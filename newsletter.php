<?php
if (isset($_GET['email'])) {
    $to = "contact@designexs.com"; // Replace with your email address
    $subject = "New email subscription";
    $email = $_GET['email'];

    // Send email
    if (mail($to, $subject, $email)) {
        echo "Email sent successfully :)";
    } else {
        echo "Failed to send email.";
    }
}
?>