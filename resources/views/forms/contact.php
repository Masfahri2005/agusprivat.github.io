<?php
// Ganti dengan alamat email yang Anda tuju
$receiving_email_address = 'garnindyo@gmail.com';

// Cek apakah form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Simpan data ke file
    $file = 'contact_submissions.txt';
    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    file_put_contents($file, $data, FILE_APPEND);
    
    // Kirim email
    $to = $receiving_email_address;
    $headers = "From: $email";
    $email_subject = "Contact Form: $subject";
    $email_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $email_subject, $email_message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>
