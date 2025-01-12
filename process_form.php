<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من الاستمارة
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // تحديد مسار الملف النصي
    $file = 'entries.txt';

    // إعداد البيانات للتخزين
    $entry = "Name: $name, Email: $email\n";

    // تخزين البيانات داخل الملف
    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        // توجيه المستخدم إلى Content Locker
        header("Location: https://installchecker.com/cl/i/r7m7rg");
        exit();
    } else {
        echo "There was an error saving your entry. Please try again.";
    }
}
?>
