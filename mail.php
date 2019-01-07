<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['number'];
$helptext = $_POST['helptext'];
$formcontent="From: $name \n Contact Number: $number \n Company: $company \n Message: $helptext";
//$recipient = "ask@novum.capital";
$recipient = "praveen@novum.capital";
$subject = "Novum Capital Contact Request";
$mailheader = "From: ask@novum.capital \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for contacting us! We will get back to you soon!";
