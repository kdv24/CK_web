<?php 
$clientName = $_GET["clientName"];
$clientEmail = $_GET["clientEmail"];
$yarnName = $_GET["yarnName"];
$yarnQuantity = $_GET["yarnQuantity"];
$yarnSKU = $_GET["yarnSKU"]
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Title of my page</title>
</head>
<body>
<?php include('inc/header.php'); ?>

	<h4>Confirmation of Order</h4>
	<p>Hi <?php echo $clientName; ?>,</p> <br>
	<p>We have received your order and are beginning to gather the following yarns for you: </p>

	<p><?php echo $yarnQuantity . $yarnName; ?></p>


	We look forward to seeing you in the store and hope you end up with a few bonus moments to browse as well!  Thank you for your order.</p><br>
	<p>Truly, </p> <br>
	<p>Your friends at Close Knit</p>
</body>
</html>