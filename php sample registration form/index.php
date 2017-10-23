<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Students Registration App">
  	<meta name="keywords" content="Php, Angella">
  	<meta name="author" content="Nantongo Angella">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students Registration</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="index.php">Students Registration App</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <p class="navbar-text navbar-right actions"><a class="btn btn-default action-button" role="button" href="#">Admin Login</a></p>
                </div>
            </div>
        </nav>
    </div>
    <div class="container home-wrapper">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-md-6">
			    	<h3>Fill in the form Below to Register</h3><hr>
			    	<div>
			    		<form method="POST" action="assets/php/register.php">
			    			<div class="form-group">
			    				<label>First Name</label>
			    				<input type="text" name="first_name" class="form-control">
			    			</div>
			    			<div class="form-group">
			    				<label>Last Name</label>
			    				<input type="text" name="last_name" class="form-control">
			    			</div>
			    			<div class="form-group">
			    				<label>Registration Number</label>
			    				<input type="text" name="reg_number" class="form-control">
			    			</div>
			    			<div class="form-group">
			    				<label>Phone Number</label>
			    				<input type="text" name="phone_number" class="form-control">
			    			</div>
			    			<div class="form-group">
			    				<label>Email</label>
			    				<input type="email" name="email" class="form-control">
			    			</div>
			    			<div class="form-group">
			    				<label>Gender</label>
			    				<select class="form-control" name="gender">
			    					<option value="">Select Gender</option>
			    					<option value="MALE">MALE</option>
			    					<option value="FEMALE">FEMALE</option>
			    				</select>
			    			</div>
			    			<div class="form-group">
			    				<input type="submit" value="Register" name="submit" class="btn btn-default col-sm-12">
			    			</div>
			    		</form>
			    	</div>
			    </div>
	    	</div>
    	</div>
    </div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>