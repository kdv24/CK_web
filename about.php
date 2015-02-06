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

	header("Location: about.php?status=thanks");	
	exit;
}
?>

<?php 
$pageTitle = "about us";
$section = "about";
include('inc/header.php'); ?>

     <div class="about">
     	<div class="inline-block">
	      <img src="img/closeknit_storefront.jpg" alt="Close Knit Storefront image">
	      <p>
	      Close Knit is a cozy yarn store located in the Alberta neighborhood of northeast Portland. Blah blah blah.... ya da ya da. lotsa text. lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	      </p>
	    </div> 

	  <?php if (isset($_GET["status"]) AND ($_GET["status"] == "thanks")) { ?>
		<div class="email_reply">
			<p>Thanks for the email!  We will be in touch with you soon!</p>
		</div>
	  <?php } else { ?>
	    
		  <div class="contact-us">  
		      <h3>Contact Us</h3>
		      <p>By all means, tell us what you're thinking and ask your questions!  Simply fill out the form below.</p>
		      <form method="post" action="about.php">
		      	<table>
		      	<span class="form-control"
			      	<tr class="form-input">
			      		<th>
			      			<label for="name">Name</label> 
			      		</th>
			      		<td>	
			      			<input type="text" name="name" class="name">
			      		</td>	
			      	</tr>
			      	<tr class="form-input">
			      		<th>
			      			<label for="email">Email</label> 
			      		</th>
			      		<td>	
			      			<input type="text" name="email" id="email">
			      		</td>	
			      	</tr>
			      	<tr class="form-input">
			      		<th>
			      			<label for="message">Message</label> 
			      		</th>
			      		<td>	
			      			<textarea name="message" id="message"></textarea>
			      		</td>	
			      	</tr>
			    </span>  	
		      	</table>	
		      	<select class="form-control">
		      		<h4>Reason for contacting us</h4>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
				</select>
		      	<input type="submit" value="send">	
		      </form>	
		   </div>   
	   <?php } ?>		   
      </div> 

<?php include('inc/footer.php'); ?>  
    
  </div>
  
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.1.js"></script>
</html>