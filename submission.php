<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "askweandyouevents@gmail.com"; // Replace with your actual email address
    
    // Set the subject for the email
    $subject = "Contact Form Submission from $name";
    
    // Compose the email message
    $message_body = "Name: $name\n";
    $message_body .= "Phone: $phone\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";
    
    // Additional headers
    $headers = "From: $email\r\n";
    
    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your submission. We will get back to you shortly.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // If the form is not submitted via POST, show an error message
    echo "Error: This page should not be accessed directly.";
}
?>
