<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Title of my page</title>
</head>
<body>
	<div class="container">
		<h1>The top of my page</h1>
<?php include('header.php'); ?>

		<form action="php file it should link to">
		<!-- "form-group" is for DIV wrapping LABEL & INPUT tags -->
			<div class="form-group">
				<label for="FOR should generally match id of INPUT tag">Type here what to display to user</label>
			<!-- "form-control" is for INPUT tags and allows control over things like size of input field -->
				<input id="just to id the element, but generally same as NAME and LABEL FOR" name="matches variable for php" class="form-control" type="text"> <!--don't need closing tag for INPUT -->
			</div>
			<button type="submit" class="btn">Text on the button</button>
		</form>
</body>	
</div>

