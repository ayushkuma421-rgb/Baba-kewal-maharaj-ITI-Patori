<?php
$messageSent = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "ayushkuma421@gmail.com"; // अपना email डालें
    $mailSubject = "New Contact Form Message: " . $subject;

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    $headers = "From: $email";

    if (mail($to, $mailSubject, $body, $headers)) {
        $messageSent = "Message sent successfully!";
    } else {
        $messageSent = "Failed to send message.";
    }
}
?>
