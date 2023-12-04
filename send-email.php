<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "timetorock@fitt.ro";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message successfully sent";
    } else {
        echo "Message sending failed";
    }
}
?>