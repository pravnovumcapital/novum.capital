<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['number'];
$helptext = $_POST['helptext'];
$formcontent="From: $name \n Contact Number: $number \n Company: $company \n Message: $helptext";
//$recipient = "ask@novum.capital";
//$recipient = "test-z3uop@mail-tester.com";
//$subject = "Novum Capital Contact Request";
//$mailheader = "From: ask@novum.capital \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");




require './vendor/autoload.php'; // If you're using Composer (recommended)

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("ask@novum.capital", "Example User");
$email->setSubject("Novum Capital Contact Request");
$email->addTo("praveen@novum.capital", "praveen");
$email->addContent("text/plain", "We have a new contact request");
$email->addContent(
    "text/html", "<strong>".$formcontent."</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    //print $response->statusCode() . "\n";
    //print_r($response->headers());
    //print $response->body() . "\n";
    echo "Thank you for contacting us! We will get back to you soon!";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
