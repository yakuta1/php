<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
       <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>Form</title>
</head>
<body>
	<form action="uploader.php" enctype="multipart/form-data" method="post">
    
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" /><br />
	Upload you File LIMIT 10MB<input type="file" name="upload[]" multiple="multiple"/>
	<input type="submit" class="btn btn-default" />
</form>


</body>
</html>