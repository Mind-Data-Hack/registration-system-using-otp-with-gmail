<?php

include("../include/connection.php");
	
	 //upload posts
	 
	 
	if(isset($_SESSION['email'])) {
	  $firstname = $_SESSION['firstName'];
	  $lastname = $_SESSION['LastName'];
	  $email = $_SESSION['email'];
	  $password = $_SESSION['password'];
	  $hash = password_hash($password, PASSWORD_BCRYPT);

  $check_email = "select * from registered_users where email='$email'";
  $run_email = mysqli_query($con,$check_email);

  $check = mysqli_num_rows($run_email);

  if($check==1){

  echo "<script>alert('Email already exist, please try another!')</script>";
  exit();
  }

$insert = "insert into registered_users (first_name,last_name,email,password,profile_image,bio,website,online_offline,posts) values ('$firstname','$lastname','$email','$hash','profile_image/profile_image.jpg','bio','website','online','No')"  or die(mysqli_error());

	  $run = mysqli_query($con,$insert);

	  if($run){

       $_SESSION['email']=$email;

		echo"<script>window.open('../home.php','_self')</script>";
					}

			exit();     	 		 
   }

?>
