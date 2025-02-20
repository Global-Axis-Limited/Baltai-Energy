<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["fullName"]);
    $email = htmlspecialchars($_POST["emailAddress"]);
    $phone = htmlspecialchars($_POST["phoneNumber"]);
    $message = htmlspecialchars($_POST["message"]);

    // Your email address
    $to = "hmztadeleke@gmail.com";
    
    // Email subject
    $subject = "New Contact Form Submission from $name";
    
    // Email body
    $body = "You have received a new message from your website contact form:\n\n";
    $body .= "Full Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
