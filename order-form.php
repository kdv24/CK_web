<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Title of my page</title>
</head>
<body>
	<div>
<?php include('inc/header.php'); ?>

	<div class="about">
		<p>We know that sadly sometimes there isn't enough time in the day to spend lingering over all our lovely yarns, so we are happy to gather your fibers for you ahead of time!  Simply choose the skeins you'd like and pay with either credit card or paypal, and we'll have your beautiful new yarn waiting for you at the counter. </p>
		<form action="order-receipt.php">
		<!-- "form-group" is for DIV wrapping LABEL & INPUT tags -->
			<form class="form-inline">
			  <div class="contact-info form-group">
			    <label for="exampleInputName2">Name</label>
			    <input type="text" class="form-control" id="$clientName" placeholder="Full Name">
			  </div>
			  <div class="contact-info form-group">
			    <label for="exampleInputEmail2">Email</label>
			    <input type="email" class="form-control" id="clientEmail" placeholder="Email address for questions about your order">
			  </div>
			</form>
			<div class="form-group">
				<!--YARN NAME -->
				<label for="$yarnName">Choose Yarn</label>
			<!-- "form-control" is for INPUT tags and allows control over things like size of input field -->
				<input id="$yarnName" name="$yarnName" class="form-control" type="text"> <!--don't need closing tag for INPUT -->

				<!--YARN QUANTITY -->
				<label for="$yarnQuantity">Quantity</label>
			<!-- "form-control" is for INPUT tags and allows control over things like size of input field -->
				<input id="$yarnQuantity" name="$yarnQuantity" class="form-control" type="text"> <!--don't need closing tag for INPUT -->				

			<button type="submit" class="btn btn-primary">Gather my yarn!</button>
			</div>
		</form>
<?php include('inc/footer.php'); ?>		
</body>	
</div>

