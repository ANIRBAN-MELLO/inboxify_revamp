<div class="top-bar top-bar-dark">
    <div class="container">
        <div class="top-bar-contact">
            <div class="contact-item">
                <a href="tel:7003064842">
                +91 70030 64842
                </a>
            </div>

            <div class="contact-item">
                <a href="tel:7979081442">
                +91 79790 81442
                </a>
            </div>

            <div class="contact-item">
                <a href="mailto:info@inboxifyme.com">info@inboxifyme.com</a>
            </div>


            
        </div>

        <div class="login-block">

        <?php if(isset($_SESSION['id'])): ?>
            <img loading="lazy" src="assets/img/signin_dark.png" class="sign-in">
            <span style="margin-right: 10px;">Hi <?php echo $_SESSION['name']." : "; ?></span>
            <a  href="logout.php">Logout</a>


        <?php else: ?>
            <img loading="lazy" src="assets/img/signin_dark.png" class="sign-in">
            <a  href="signup.php?type=signup">Sign up</a>

        <?php endif; ?>

          
        </div>

     
        <a href="#" class="top-bar-close" id="top-bar-close-js">
            <span></span>
            <span></span>
        </a>

    </div>
</div>