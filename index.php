<?php include("includes/header.php"); ?>

<?php include("includes/top_slide.php"); ?>

<?php include("includes/navbar.php"); ?>

<?php

if (isset($_GET['msg'])) {
?>
    <script>
        alert('Thank you for registering!');
    </script>
<?php
}

?>


<?php

if (isset($_GET['login_msg'])) {
?>
    <script>
        alert('You are logged in!');
    </script>
<?php
}

?>





<!-- ... End Right-menu -->

<div class="content-wrapper">

    <div class="container" id="home">
        <div class="row pt120">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">The Best Email Marketing tool and strategy</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>

                    <p class="heading-text">Land your emails Directly to the inbox.
                    </p>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-xs-12">
                <img loading="lazy" src="assets/img/marketing.png" alt="marketing">
            </div>

        </div>
    </div>


    <div class="container info-boxes pt100 pb100" id="features">

        <div class="row pt120">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="heading align-center mb60">
                    <h4 class="h4 heading-title">We Offer a Full Range of Email
                        Marketing Services!</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box1.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">Dynamic Mailbox</h5>
                        <p class="text">have a list of different domains and mailboxes? use inboxifyme to land your emails to any mailbox.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box2.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">email analytics</h5>
                        <p class="text">Get Detailed information regarding mails sent, click through and open count.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box3.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">Warmup Support</h5>
                        <p class="text">Our automation Tools Help you warmup your domains saving ample time.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box4.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">high inbox rate</h5>
                        <p class="text">send emails to your mailerlist with high inbox rate
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box5.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">Dynamic IP</h5>
                        <p class="text"> Dynamic and auto IP rotation and emails sent from a new IP everytime
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box--standard" data-mh="info-boxes">
                    <div class="info-box-image">
                        <img loading="lazy" src="assets/img/info-box6.png" alt="image">
                    </div>
                    <div class="info-box-content">
                        <h5 class="info-box-title">Custom Email Design</h5>
                        <p class="text"> Dynamic template for your email campaigns.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ... End Info-Box -->


    <!-- SEO-Score -->

    <div class="container-fluid" id="ask_query">
        <div class="row">

            <div class="seo-score scrollme">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                            <div class="seo-score-content align-center">

                                <div class="heading align-center">
                                    <h4 class="h1 heading-title">Have any query?</h4>
                                    <p class="heading-text">Reach out to us for any query!</p>
                                </div>

                                <div class="">

                                    <form class="" data-nonce="crumina-submit-form-nonce" data-type="standard" action="querry.php" method='POST'>

                                        <div class="row">

                                            <div class="col-lg-12 no-padding col-md-12 col-xs-12 col-sm-12">
                                                <!-- <input name="site" class="input-dark site" placeholder="Type in your Website URL" required> -->
                                                <textarea style="border-radius: 50px;" name="site" class="input-dark site" cols="60" rows="10" placeholder="Type in your Website URL" required></textarea>
                                            </div>

                                        </div>

                                        <button class="btn btn-medium btn--green btn-hover-shadow">
                                            <span class="text">Send Us!</span>
                                            <span class="semicircle"></span>
                                        </button>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="images">
                    <img loading="lazy" src="assets/img/seoscore1.png" alt="image">
                    <img loading="lazy" src="assets/img/seoscore2.png" alt="image">
                    <img loading="lazy" src="assets/img/seoscore3.png" alt="image">
                </div>

            </div>
        </div>
    </div>

    <!-- ... End SEO-Score -->



    <!-- Background-mountains -->

    <div class="container-fluid" id="our_approch">
        <div class="row">
            <div class="background-mountains medium-padding120 scrollme">

                <div class="images">
                    <img loading="lazy" src="assets/img/mountain1.png" alt="mountain">
                    <img loading="lazy" src="assets/img/mountain2.png" alt="mountain">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="heading align-center">
                                <h4 class="h1 heading-title">email marketing innovation and approaches</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">we Deploy innovative approaches to send emails. Unique in Trade and specific to bussiness's
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box--standard-centered">
                                <div class="info-box-image">
                                    <img loading="lazy" src="assets/img/info-box7.png" alt="image">
                                </div>
                                <div class="info-box-content">
                                    <h4 class="info-box-title">Objective</h4>
                                    <p class="text">High inbox rate with no limit on contacts.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box--standard-centered">
                                <div class="info-box-image">
                                    <img loading="lazy" src="assets/img/info-box8.png" alt="image">
                                </div>
                                <div class="info-box-content">
                                    <h4 class="info-box-title">Strategy</h4>
                                    <p class="text">Dynamic auto rotation SMTP server for better inboxing
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box--standard-centered">
                                <div class="info-box-image">
                                    <img loading="lazy" src="assets/img/info-box9.png" alt="image">
                                </div>
                                <div class="info-box-content">
                                    <h4 class="info-box-title">Efficient Warmup</h4>
                                    <p class="text">Warmup is no more an issue with our bots Performing automated warmup.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="info-box--standard-centered">
                                <div class="info-box-image">
                                    <img loading="lazy" src="assets/img/info-box10.png" alt="image">
                                </div>
                                <div class="info-box-content">
                                    <h4 class="info-box-title">Analytics</h4>
                                    <p class="text">Get Detailed Report for the Email Sents, opened and Clicked.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-center">
                        <div class="btn-block">
                            <a href="03_services.html" class="btn btn-medium btn--dark">
                                <span class="text">More Info</span>
                                <span class="semicircle"></span>
                            </a>
                            <a href="03_services.html" class="btn btn-medium btn--breez">
                                <span class="text">Get Started!</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- End Background-mountains -->

    <!-- Testimonial-slider -->

    <div class="container-fluid" id="happy_clients">
        <div class="row">
            <div class="testimonial-slider scrollme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Happy Clients
                                    About Us</h4>
                                <div class="heading-line">
                                    <span class="short-line bg-yellow-color"></span>
                                    <span class="long-line bg-yellow-color"></span>
                                </div>
                                <p class="heading-text c-white">Using this product for 8 months now. best email marketing product i have used. Got huge respones with my email campaigns. Above 90% open rate for transactional emails.
                                </p>
                            </div>
                            <div class="signature js-animate-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13" stroke-linecap="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

                            <div class="testimonial-item">
                                <!-- Slider main container -->
                                <div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade" data-loop="false">

                                    <div class="swiper-wrapper">
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200"> personally love the automatic warmup mechanism. the bots do the mail replying and sending from the email ID's and domains. Saves a lot of warmup time. Mail servers are always crisp and ready.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Md. Ali</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">instant Repair Services</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img loading="lazy" src="assets/img/avatar.png" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200">Very nice support from the team. Got help with template design and a good walk through and KT for the Product. best for 3k emails daily campaigns.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">Envata Market</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img loading="lazy" src="assets/img/avatar.png" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200">Good application UI and simple mechanism.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Amarendra</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">Marketing Freelancer</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img loading="lazy" src="assets/img/avatar.png" alt="avatar">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>

                                    <div class="quote">
                                        <i class="seoicon-quotes"></i>
                                    </div>
                                </div>

                                <div class="testimonial__thumb-img">
                                    <img loading="lazy" src="assets/img/testimonial1.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-img">
                    <img loading="lazy" src="assets/img/testimonial2.png" alt="image">
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonial-slider -->


    <!-- Pricing table -->

    <div class="container-fluid" id="pricing">
        <div class="row">
            <div class="pricing-tables medium-padding120 bg-border-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="heading align-center">
                                <h4 class="h1 heading-title">Our Pricing Packages</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">worth every penny you spend!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="pricing-tables-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                <div class="pricing-tables-item">
                                    <div class="pricing-tables-icon">
                                        <img loading="lazy" src="assets/img/pricing1.png" alt="personal">
                                    </div>
                                    <a href="#" class="pricing-title">Basic</a>
                                    <ul class="pricing-tables-position">
                                        <li class="position-item">
                                            <span class="count">2</span>
                                            Dedicated IP
                                        </li>
                                        <li class="position-item">
                                            <span class="count">6,000</span>
                                            emails daily
                                        </li>
                                        <li class="position-item">

                                            no contact limit
                                        </li>
                                        <li class="position-item include">
                                            Includes Analytics Report
                                        </li>
                                        <li class="position-item include">
                                            Dynamic Template Design
                                        </li>


                                    </ul>
                                    <h4 class="rate">Rs. 18,999 yearly</h4>
                                    <a href="20_checkout.html" class="btn btn-medium btn--dark">
                                        <span class="text">Order Now!</span>
                                        <span class="semicircle"></span>
                                    </a>
                                    <img loading="lazy" src="assets/img/pricing-dots.png" class="dots" alt="dots">
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="pricing-tables-item">
                                    <div class="pricing-tables-icon">
                                        <img loading="lazy" src="assets/img/pricing2.png" alt="personal">
                                    </div>
                                    <a href="#" class="pricing-title">Premium</a>
                                    <ul class="pricing-tables-position">
                                        <li class="position-item">
                                            <span class="count">15</span>
                                            Dedicated IP
                                        </li>
                                        <li class="position-item">
                                            <span class="count">10,000</span>
                                            emails daily
                                        </li>
                                        <li class="position-item">

                                            No Contact limit
                                        </li>
                                        <li class="position-item include">
                                            Includes Warmup Strategy
                                        </li>
                                        <li class="position-item include">
                                            Includes Analytics Report
                                        </li>
                                        <li class="position-item include">
                                            Dynamic Template Design
                                        </li>
                                        <li class="position-item include">
                                            Anti Spam Protection
                                        </li>
                                        <li class="position-item">
                                            <span class="count">15</span>
                                            Email Accounts
                                        </li>
                                    </ul>
                                    <h4 class="rate">Rs. 59,999 yearly</h4>
                                    <a href="20_checkout.html" class="btn btn-medium btn--dark">
                                        <span class="text">Order Now!</span>
                                        <span class="semicircle"></span>
                                    </a>

                                    <img loading="lazy" src="assets/img/pricing-dots.png" class="dots" alt="dots">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="pricing-tables-item">
                                    <div class="pricing-tables-icon">
                                        <img loading="lazy" src="assets/img/pricing3.png" alt="personal">
                                    </div>
                                    <a href="#" class="pricing-title">Professional</a>
                                    <ul class="pricing-tables-position">
                                        <li class="position-item">
                                            <span class="count">As per Required</span>
                                            Dedicated IP
                                        </li>
                                        <li class="position-item">
                                            <span class="count">As per Required</span>
                                            Emails daily
                                        </li>
                                        <li class="position-item">

                                            No Contact limit
                                        </li>
                                        <li class="position-item include">
                                            Includes Warmup Strategy
                                        </li>
                                        <li class="position-item include">
                                            Includes Analytics Report
                                        </li>
                                        <li class="position-item include">
                                            Dynamic Template Design
                                        </li>
                                        <li class="position-item include">
                                            Anti Spam Protection
                                        </li>
                                        <li class="position-item">
                                            <span class="count">15</span>
                                            Email Accounts
                                        </li>
                                    </ul>
                                    <h4 class="rate">as per Bussiness</h4>
                                    <a href="20_checkout.html" class="btn btn-medium btn--dark">
                                        <span class="text">Write us!</span>
                                        <span class="semicircle"></span>
                                    </a>

                                    <img loading="lazy" src="assets/img/pricing-dots.png" class="dots" alt="dots">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Pricing table -->



    <!-- Post-slider -->

    <div class="container" id="faq">

        <div class="recent-post-slider medium-padding120">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h4 class="h1 heading-title">Latest FAQs</h4>
                        <a href="14_blog.html" class="read-more" style="color:#333">Read all FAQs
                            <i class="seoicon-right-arrow"></i>
                        </a>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="theme-module news-slider-module">
                <div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style="color:#333">
                                    August 31, 2021
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>How much time does it take to shoot 5k emails?</p>
                                    </h2>

                                    <p class="post__text"> It takes about 2.5 Hours approx to send 5k emails from our distributed system.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author1.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style="color:#333">
                                    May 14, 2020
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>What kind of warm up email support do we get from the product?</p>
                                    </h2>

                                    <p class="post__text">Warmup Strategy is included as part of support, Guidelines are set to handle in house warm up. The team is also equiped with antonomous system that carters warmup for a minimal charge.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author2.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published" datetime="2016-01-30 12:00:00" style="color:#333">
                                    January 10, 2020
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>why does premium plan send only 10k emails, can buy 2 basic plans for less but get more daily limit?</p>
                                    </h2>

                                    <p class="post__text">Basic plan works well for Transactional emails else you need to go for premium plan</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author3.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style=" color:#333">
                                    November 3, 2019
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>what is the charge for permium plan for inboxify?</p>
                                    </h2>

                                    <p class="post__text">Premium plans charges are not predefined. It may vary as per the Usage and requirement. It does not Necessarily mean that it is expesive then the lower grade plans.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author1.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style=" color:#333">
                                    April 24, 2019
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p> What kind of report do we get after Blasting the Emails?</p>
                                    </h2>

                                    <p class="post__text">Login to Via your Credentials to the reporting page, URL is sent once user subscribes. User may see No of Emails Delivered,No of emails Opened and the no of emails Clicked.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author2.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style=" color:#333">
                                    february 15, 2019
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>What is the inbox Rate for Transactional Emails</p>
                                    </h2>

                                    <p class="post__text">Emails are Guranteed to land in Inbox.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author3.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style=" color:#333">
                                    January 30, 2019
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>Can we Send Non Transactional Emails</p>
                                    </h2>

                                    <p class="post__text">Yes, With Proper Warmup We can send.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author1.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <time class="post__date published " datetime="2016-01-30 12:00:00" style=" color:#333">
                                    January 30, 2016
                                </time>

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <p>Can we use Inboxify to set up email Marketting Campaign?</p>
                                    </h2>

                                    <p class="post__text">Definetly, we can set up campaigns and sent it to a List.</p>

                                </div>

                                <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img loading="lazy" src="assets/img/post-author2.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div>

                            </article>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- End Post-slider -->



    <!-- Subscribe Form -->

    <div class="container-fluid bg-green-color" id="contact_us">
        <div class="row">
            <div class="container">

                <div class="row">

                    <div class="subscribe scrollme">

                        <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                            <h4 class="subscribe-title">Email Newsletters!</h4>
                            <form class="subscribe-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
                                <input class="input-standard-grey input-white" name="email" placeholder="Your Email Address" type="email" required>
                                <button class="subscr-btn">subscribe
                                    <span class="semicircle--right"></span>
                                </button>
                            </form>
                            <div class="sub-title">Sign up for new Inboxify content, updates, surveys & offers.</div>

                        </div>

                        <div class="images-block">
                            <img loading="lazy" src="assets/img/subscr-gear.png" alt="gear" class="gear">
                            <img loading="lazy" src="assets/img/subscr1.png" alt="mail" class="mail">
                            <img loading="lazy" src="assets/img/subscr-mailopen.png" alt="mail" class="mail-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Subscribe Form -->


</div>

<?php include("includes/footer.php"); ?>