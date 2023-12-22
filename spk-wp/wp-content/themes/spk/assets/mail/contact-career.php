<?php
if(!$_POST) exit;
include('config.php');
// Email verification, do not edit.
function isEmail($email_career ) {
	return(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email_career ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_career    = $_POST['name_career'];
$email_career   = $_POST['email_career'];
$phone_career   = $_POST['phone_career'];
$message_career = $_POST['message_career'];


if(trim($name_career) == '') {
	echo '<div class="error_message">You must enter your Name.</div>';
	exit();
}else if(trim($phone_career) == '') {
    echo '<div class="error_message">Please enter a valid phone number.</div>';
    exit();
} else if(!is_numeric($phone_career)) {
    echo '<div class="error_message">Phone number can only contain numbers.</div>';
    exit();
}
else if(trim($email_career) == '') {
	echo '<div class="error_message">Please enter a valid email address.</div>';
	exit();
} else if(!isEmail($email_career)) {
	echo '<div class="error_message">You have enter an invalid e-mail address, try again.</div>';
	exit();
	}  else if(trim($message_career) == '') {
	echo '<div class="error_message">Please enter your message.</div>';
	exit();
} 

if(get_magic_quotes_gpc()) {
	$message_career = stripslashes($message_career);
}

// Below the subject of the email
$e_subject = 'You\'ve been contacted by ' . $name_career . '.';

// You can change this if you feel that you need to.
$e_body = "You have been contacted by $name_career with additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "$message_career" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name_career via email, $email_career or via phone $phone_career";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_career" . PHP_EOL;
$headers .= "Reply-To: $email_career" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$usersubject = "Thank You Contact Website $website_name";
$userheaders = "From: $sending_email ";
$usermessage = "Thank you for contact. We will reply shortly!";

mail($email_career,$usersubject,$usermessage,$userheaders);

if(mail($recipient_email, $e_subject, $msg, $headers)) {
	// Success message
	echo "<div id='success_page' style='padding:25px 0'>";
	echo "<strong >Email Sent.</strong><br>";
	echo "Thank you <strong>$name_career</strong>,<br> your message has been submitted. We will contact you shortly.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
