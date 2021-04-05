<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="sign.css" rel="stylesheet">
	
	
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script> 
	
	
  </head>
  <body>
  
  
  
  
<div class="contain">
	<class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h1>Sign up</h1>
				<?php
				if(isset($_GET['error'])){
				if(($_GET['error'])=="emptyfields"){
				echo '<p class="signuperror"> *Enter all the fields </p>';
				}

				else if($_GET['error']=="invalidusernameoremail"){
				echo '<p class="signuperror"> *Invalid Username or Email</p>';
				}

				else if($_GET['error']=="invalidfirstnameorlastname"){
				echo '<p class="signuperror"> *Invalid First Name or Last Name</p>';
				}

				else if($_GET['error']=="invalidemail"){
				echo '<p class="signuperror"> *Invalid Email Address</p>';
				}

				else if($_GET['error']=="passwordnotmatch"){
				echo '<p class="signuperror">*Passwords do not match</p>';
				}

				else if($_GET['error']=="usertaken"){
				echo '<p class="signuperror"> *Username already exists</p>';
				}
				else if($_GET['error']=="EmailAddressAlreadyExists"){
				echo '<p class="signuperror"> *Email Address already exists</p>';
				}

				else if($_GET['error']=="unabletosignup"){
				echo '<p class="signuperror"> *Unable to sign Up</p>';
				}
				}
				?>

				<form class="form-vertical" role="form" action="signupp.php" method= "POST">
				<div class="form-group">
					<label for="first name">First Name:</label>
					<input type="text" name="first" class="form-control" placeholder="First Name"/>
				</div>
				<div class="form-group">
					<label for="last name">Last Name:</label><br/>
					<input type="text" name="last" class="form-control" placeholder="Last Name"/>
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="user" class="form-control" placeholder="Username" />
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="mail" class="form-control" placeholder= "Email Address"/>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="pass" class="form-control" placeholder= "Password"/>
				</div>
				<div class="form-group">
					<label for="Confirm Password">Confirm Password:</label>
					<input type="password" name="conf_pass" class="form-control" placeholder= "Confirm Password"/>
				</div>

				<button class='btn btn-default btn-sm sign' name="signupbtn">Submit</button>
				</form>
				<p class="signin">Already registered? <a href="jobtips.php" target="_blank">Sign in!</a></p>
			</div>
			<div class="col-md-4">
			</div>
		</div> 
	</div>  
</div> 
  
  
  
  
  
  
  
  
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

  </html>