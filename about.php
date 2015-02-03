<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message;

	// TODO: Send Email

	header("Location: contact_thanks.php");	
	exit;
}
?>

<?php 
$pageTitle = "about us";
$section = "about";
include('inc/header.php'); ?>

     <div class="about" class="grid_12 omega">
      <p>
      Close Knit is a cozy yarn store located in the Alberta neighborhood of northeast Portland. Blah blah blah.... ya da ya da. lotsa text. lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <h3>Contact Us</h3>
      <p>By all means, tell us what you're thinking and ask your questions!  Simply fill out the form below.
      <form method="post" action="about.php">
      	<table>
	      	<tr>
	      		<th>
	      			<label for="name">Name</label> 
	      		</th>
	      		<td>	
	      			<input type="text" name="name" id="name">
	      		</td>	
	      	</tr>
	      	<tr>
	      		<th>
	      			<label for="email">Email</label> 
	      		</th>
	      		<td>	
	      			<input type="text" name="email" id="email">
	      		</td>	
	      	</tr>
	      	<tr>
	      		<th>
	      			<label for="message">Message</label> 
	      		</th>
	      		<td>	
	      			<textarea name="message" id="message"></textarea>
	      		</td>	
	      	</tr>
      	</table>	
      	<input type="submit" value="send">	
      </form>	
      </div> 

<?php include('inc/footer.php'); ?>  
    
  </div>
  
</body>
</html>