<?php
include 'contact.php';


if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $to = "Micalifornia0202@gmail.com";
    $headers = "From: " . $email;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    mail($to, $subject, $txt, $headers)
        or die("Error!");

    header("Location: contact-submit.php?mailsend");

    echo "Location: contact-submit.php";
}
