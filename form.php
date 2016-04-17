<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
       <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>Form</title>
</head>
<body>
	<form action="insert.php" method="post" role="form">
	<label for="firstname">
		<input type="text" name="firstname" id="firstname">
	</label>
	<label for="lastname">
		<input type="text" name="lastname" id="lastname">
	</label>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>