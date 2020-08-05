
<?php
    include ('./registration/header.php');
?>
    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="login/login.php">Login</a></span>
                </div>
                <div class="d-flex justify-content-center">

                    <form action="registration/registration_process.php" method="post" enctype="multipart/form-data" id="reg-form">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img src="registration/assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    </div>
                </div>

                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" autocomplete="off">
                            </div>
                            <div class="col">
                                <input type="text" name="LastName" id="LastName" class="form-control" placeholder="Last Name" autocomplete="off">
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

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>

</form>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->


<?php
    // footer.php
    include ('./registration/footer.php');
?>