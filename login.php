<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script>
new WOW().init();
</script>
	<title>Login</title>
</head>
<style>

</style>
<body>
<div class="container">
    <div style="margin-top:100px;">
    <div class="row">
        <div class="col-lg-6 wow rotateIn">
        <div class="panel panel-info">
            <div class="panel-heading">Please Sign In</div>
            <div class="panel-body">
            
           	    <form action="loginpro.php" method="post" role="form" class="form-horizontal">
                    <div class="form-group">
                <label for="id">Login</label>
                <input type="text" class="form-control" name="id" placeholder="Enter your Login ID">
                    </div>
                    <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                    <input type="submit" class="btn btn-default" value="Submit"/>
                </form>
            </div></div>
        </div>
    </div>
    </div>
</div>
</body>
</html>