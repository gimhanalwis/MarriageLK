<?php
$to = 'cecelia@serendipityuk.com'; // Put in your email address here
$subject = "Website Contact Us Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$lname = stripslashes($_REQUEST['lname']); // sender's name
$email 	= stripslashes($_REQUEST['email']); // sender's email
$phone = stripslashes($_REQUEST['phone']);
$selectvendor    = stripslashes($_REQUEST['selectvendor']);
$message = stripslashes($_REQUEST['message']);

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "First Name:" . $fname . "\r\n\n"; // add sender's name to the message
$msg .= "Last Name:" . $lname . "\r\n\n"; // add sender's email to the message
$msg .= "E-mail:" . $email . "\r\n\n"; // add sender's email to the message
$msg .= "Phone No:" . $phone . "\r\n\n"; // add sender's phone to the message
$msg .= "Vendor Purpose : " . $selectvendor . "\r\n\n"; // add sender's phone to the message
$msg .= "Messages:" . $message . "\r\n\n"; // add sender's checkboxes to the message
$msg .= "\r\n\n";

$mail = @mail($to, $subject, $msg, "From:" .$email); // This command sends the e-mail to the e-mail address contained in the $to variable

if ($mail) {
    header("Location:index.html");
} else {
    echo 'Message could not be sent!'; //This is the message that will be shown when an error occured: the message was not send
}

?>