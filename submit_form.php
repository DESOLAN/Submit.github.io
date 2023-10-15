<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    $to = "mjjccer@gmail.com"; // Replace with your Gmail address
    $subject = "New Question Submission";
    $message = "Name: $name\nEmail: $email\nComment: $comment";
    
    $headers = "From: $email";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error sending form!";
    }
} else {
    echo "Invalid request!";
}
?>
