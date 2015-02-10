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
			  <div class="contact-info">
			    <label for="exampleInputName2">Name</label>
			    <input type="text" class="form-control" id="$clientName" placeholder="Full Name">
			  </div>
			  <div class="contact-info">
			    <label for="exampleInputEmail2">Email</label>
			    <input type="email" class="form-control" id="clientEmail" placeholder="Email address for questions about your order">
			  </div>
			</form>
			<div class="order-form yarn-name">
<!--YARN NAME -->
				<label for="$yarnName">Choose Yarn</label>
				<input id="$yarnName" name="$yarnName" class="form-control" type="text"> 
			</div>
<!--YARN QUANTITY -->
			<div class="order-form yarn-quantity">	
				<label for="$yarnQuantity">Quantity</label>
				<input id="$yarnQuantity" name="$yarnQuantity" class="form-control" type="text">
			</div>	
<!--YARN SKU *AUTOFILL-->
			<div class="order-form yarn-SKU">	
				<label for="$yarnSKU">SKU</label>
				<input id="$yarnSKU" name="$yarnSKU" class="form-control" type="text"> 
			</div>	
<!--YARN PRICE *AUTOFILL-->
			<div class="order-form yarn-price">	
				<label for="$yarnPrice">Price</label>
				<input id="$yarnPrice" name="$yarnPrice" class="form-control" type="text"> 
			</div>	

			<div class="form-group">
			<button type="submit" class="btn btn-primary">Gather my yarn!</button>
			</div>
		</form>
<?php include('inc/footer.php'); ?>		
</body>	
</div>

