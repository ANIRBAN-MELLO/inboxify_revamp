<?php include("includes/header.php"); ?>

<?php

if(isset($_GET['query'])){
    $query = $_GET['query'];
}

?>


<div class="content-wrapper">



    <!-- Contact form -->

    <?php if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'signup') : ?>


        <div class="container">
            <div class="medium-padding120">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h4 class="heading-title">Signup</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
                        </div>
                    </div>
                </div>

                <form action="signupProcess.php" class="form" method='POST'>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" style="background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="hidden" class="form-control" id="query" name="query" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" value="<?php echo $query; ?>" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="submit" class="form-control" name="signup" style=" background-color:#4cc2c0; color:#fff; border-radius:30px; margin-top:5px" value="Signup">

                                <p>Already registered? <a href="signup.php?type=login">Click here to Login</a></p>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

        <!-- End Contact form -->

    <?php else : ?>

        <div class="container">
            <div class="medium-padding120">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h4 class="heading-title">Login</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
                        </div>
                    </div>
                </div>

                <form action="loginProcess.php" class="form" method="post">
                    <div class="form-group">
                      
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" style=" background-color:#ddd; color:#333; border-radius:30px; margin-top:5px" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="submit" class="form-control" name="login" style=" background-color:#4cc2c0; color:#fff; border-radius:30px; margin-top:5px" value="Login">
                                 <span>
                                    <?php if(isset($_GET['login_error'])){
                                            echo $_GET['login_error'];
                                    }
                                    ?>
                                    
                                </span>

                                <p>Not yet registered? <a href="signup.php?type=signup">Click here to Register</a></p>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

        <!-- End Contact form -->

    <?php endif; ?>





</div>

<?php include("includes/footer.php"); ?>