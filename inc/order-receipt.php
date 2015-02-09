<?php 
$variable_name = "me";
$variable_name = $_GET["INPUT NAME value"];
$fact_of_the_day = $_GET["fact_of_the_day"]
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Title of my page</title>
</head>
<body>
	<h1>Intro to page</h1>
	<p>Meaningful text</p>
	<p>More meaningful text</p>
	<p>And so on and so forth with lots of Lorem Ipsum for nostalgic reasons or interesting <?php echo $fact_of_the_day; ?> on my pages.</p>
</body>
</html>