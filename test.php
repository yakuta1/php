<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	<?php include("mysqli.php"); ?>
</body>
    <?php  
        $query = "SELECT * FROM contacts";
        $result = mysqli_query($connection,$query);
    ?>


    <ul>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <li><?php echo $row['first_name'] ?></li>
    <?php endwhile; ?>
    </ul>


</html>