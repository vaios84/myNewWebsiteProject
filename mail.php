<?php
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$human = $_POST['human'];
$message = $_POST['message'];

$formcontent=" From: $name \n email: $email \n category: $category \n human: $human \n message: $message ";
$recipient = "software.vast@gmail.com";
$subject = "Contact Form - $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>

