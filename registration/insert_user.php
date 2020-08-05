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
<br>
<br>
<br>
<br>
<br>


<?php
session_start();
$code="";






if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
include 'submit_data.php';

session_destroy();
//Do you stuff
}
else
{
echo "<h4 style='color:red;'>Wrong Code Entered Try Again</h4>";



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





  
  

<?php } ?>
</center>
