<?php

require 'operation.php';

//create an instance of operation class
$operation = new operation();

#form data validation
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$reg_number = $_POST['reg_number'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if (($first_name == "") || ($last_name == "") || ($reg_number == "") || ($email == "") || ($phone_number == "") || ($email == "") || ($gender == "")) {
	$data = "Form data is incomplete";
	$error = true;
}
else{

	#check if email is already registered
	$val_email = $operation->getStudentByemail($email);
	$count = $val_email['count'];

	if ($count > 0) {
		$data = "Email Address is already registered";
		$error = true;
	}

	else{

		#check if phone number is already registered
		$val_phone = $operation->getStudentByphone($phone_number);
		$count = $val_phone['count'];

		if ($count > 0) {
			$data = "The phone number is already registered";
			$error = true;
		}

		else{
			#check if registration number is already registered
			$val_reg_num = $operation->getStudentByreg_num($reg_number);
			$count = $val_reg_num['count'];

			if ($count > 0) {
				$data = "The registration number is already registered";
				$error = true;
			}

			else{
				#insert user into database
				$user = $operation->addUser($first_name, $last_name, $reg_number, $phone_number, $email,  $gender);

				if ($user) {
					$data = "Thanks ".$first_name." ".$last_name. "\nYou have registered successfully";
					$error = false;
				}
				else{
					$data = "an error occurred while submiting you data";
					$error = true;
				}
			}
		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Students Registration App">
  	<meta name="keywords" content="Php, Angella">
  	<meta name="author" content="Nantongo Angella">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students Registration</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/main.css" />
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
    	<div class="well">
    		<?php 
    			if ($error) {
    				$class = "alert-danger";
    			}
    			else{
    				$class = "alert-info";
    			}
    		?>
    		<div class="alert <?php echo $class; ?>">
				<?php echo $data; ?>
			</div>
    		<br>
    		<p><a href="./../../index.php">Click here</a> to go back to home page</p>
    	</div>
    </div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>