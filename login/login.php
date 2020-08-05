<?php
    include ('./header.php');
?>
 <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="../index.php">Register</a></span>
                </div>
                 <div class="d-flex justify-content-center">
                 <form action="" method="post" enctype="multipart/form-data" id="reg-form">
                 <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img src="../registration/assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    </div>
                 </div>
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email" required name="email" id="email" class="form-control" placeholder="Email*" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="password*" autocomplete="off">
                            </div>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" name="login" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>

</form>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 
session_start();

include("../include/connection.php"); 



    if(isset($_POST['login'])){
    
    $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
    
    $select_user = "select * from registered_users where email='$email'";
    
    $query = mysqli_query($con,$select_user); 
    
    if($row = mysqli_num_rows($query)>0){
      
      while($user_row = mysqli_fetch_assoc($query)){
    
    if (password_verify($pass, $user_row['password'])) {


    $_SESSION['email']=$email;
    
    echo "<script>window.open('../home.php','_self')</script>";
    }
    }
}
    else {
    echo "<script>alert('incorrect details, try again!')</script>";
    }
    
    }


?>