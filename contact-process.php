<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message;

// TODO: Send Email

$pageTitle = "Contact Us";
$section = "contact";
include("inc/header.php");

?>

	<div class="container grid_12 section page">
		<div class="email_reply">
			<p>Thanks for the email!  We will be in touch with you soon!</p>
		</div>
	</div>
<?php include("inc/footer.php"); ?>		