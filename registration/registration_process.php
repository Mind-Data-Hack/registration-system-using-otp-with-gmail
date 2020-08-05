  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<center>
<?php
include('../include/connection.php');
session_start();
$code=rand(10000,99999);
$_SESSION["code"]=$code;

$firstname=$_POST['firstName'];
$lastname=$_POST['LastName'];
$email=$_POST['email'];
$password=$_POST['password'];

$_SESSION["firstName"]=$firstname;
$_SESSION["LastName"]=$lastname;
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;

  $check_email = "select * from registered_users where email='$email'";
  $run_email = mysqli_query($con,$check_email);

  $check = mysqli_num_rows($run_email);

  if($check==1){

  echo "<script>alert('Email already exist, please try another!')</script>";
  echo "<script>window.open('../index.php','_self')</script>";
  exit();
  }


require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 0;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "Enter You Email Here";
  $mail->Password = "Enter Your Password Here";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "Enter Your Email Here";
  $mail->FromName = "Manas Makkar";
  
  $mail->addAddress($email);
  
  $mail->isHTML(true);
 $mail->addAttachment('lop.jpg', 'lop1.jpg'); //set new name

 
  $mail->Subject = "Thanks For Registering On ";
  $mail->Body = "<i>Please Enter Otp To Continue:</i>".$code;
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "<h1>OTP has been send succesfully in Your email Id please checkout </h1>";

   ?>
   

 
<div class="login-form">
    <form  method="post" action="insert_user.php" enctype="multipart/form-data">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group second_box">
            <input type="text" name="captcha" id="otp" class="form-control" placeholder="OTP" required="required">
      <span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit OTP</button>
        </div>       
    </form>
</div>
<style>
.field_error{color:red;}
</style>
</body>
</html>                         

 <?php 


  }
  ?>
 
  
  

 </center> 
  
  
  
  