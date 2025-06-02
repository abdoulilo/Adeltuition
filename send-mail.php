<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $datetime = $_POST['datetime'];
    $subject = $_POST['subject'];
    $syllabus = $_POST['syllabus'];

    // Email details
    $to = "abdoulilo@yahoo.fr"; // 🔁 Replace with your email address
    $subjectLine = "New Free Trial Lesson Booking";
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    $message  = "You have a new booking:\n\n";
$message .= "Email: $email\n";
$message .= "WhatsApp: $whatsapp\n";
$message .= "Date/Time: $datetime\n";
$message .= "Subject: $subject\n";
$message .= "Syllabus: $syllabus\n";

    // Send the email
    if (mail($to, $subjectLine, $message, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Error sending message. Try again later.'); window.location.href='contact.html';</script>";
    }
}
?>
