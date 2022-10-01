<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
    header("Location: login.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <!doctype html>
<html lang="en">
<head>
<body class="img" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign Up For JAW</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<h3 class="text-center mb-4">Create Your Account</h3>
						<form action="" method="post" autocomplete="off" class="signup-form"  >
		      		<div class="form-group mb-3">
		      			<label class="label" for="">Full Name</label>
		      			<input type="text" class="form-control" name="name" required value="" placeholder="JAW">
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
              <div class="form-group mb-3">
		      			<label class="label" for="">username</label>
		      			<input type="text" class="form-control" name="username" required value="" placeholder="JAW">
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="">Email Address</label>
		      			<input type="text" class="form-control" name="email" required value="" placeholder="JAW@gmail.com">
		      			<span class="icon fa fa-paper-plane-o"></span>
		      		</div>
	            <div class="form-group mb-3">
	            	<label class="label" for="">Password</label>
	              <input id="password" type="password" class="form-control" name="password" required value="" placeholder="Password">
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            <div class="form-group mb-3">
	            	<label class="label" for="password">Confirm Password</label>
	              <input id="password-confirm" type="password" class="form-control"  name="confirmpassword" required value="" placeholder="Password">
	              <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Sign Up</button>
	            </div>
	          </form>
	          <p>I'm already a member! <a data-toggle="tab" href="login.php">Sign In</a></p>
	        </div>
				</div>
			</div>
		</div>
	</section>

	

    <!-- <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name : </label>
      <input type="text" name="name" required value=""> <br>
      <label for="">Username : </label>
      <input type="text" name="username" required value=""> <br>
      <label for="">Email : </label>
      <input type="email" name="email" required value=""> <br>
      <label for="">Password : </label>
      <input type="password" name="password" required value=""> <br>
      <label for="">Confirm Password : </label>
      <input type="password" name="confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br> <br>
    <a href="login.php">Login</a> -->
  </body>
</html>
