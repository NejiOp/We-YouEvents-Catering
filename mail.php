<?php
// Get data from form
$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email'];
$event = $_POST['event'];
$message = $_POST['message'];
$to = "inquiry@weandyoucatering.com";
$subject = "Mail From catering website";
$txt = "Name = " . $name . "\r\nNumber = " . $phone . "\r\nEmail = " . $email . "\r\nEvent = " . $event . "\r\nMessage =" . $message;
$headers = "From: $email" . "\r\n" .
    "CC: askweandyouevents@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Thank you message
$message = "Thank you for your submission! We will get back to you shortly.";
echo "<script>alert('$message'); window.location.href = 'contactus.html';</script>";
?>