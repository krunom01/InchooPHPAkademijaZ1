<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>bootstrap</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                            <p>
                            <?php 
                            $name = "Kruno";
                            echo "my name is ". $name;
                            
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.php">bootstrap page</a></li>
                            <li><a href="../page1/page1.html">page 1</a></li>
                            <li><a href="job-category.html">page 2</a></li>
                            <li><a href="#">page 3</a></li>
                            <li><a href="contact-us.html">page 4</a></li>
                            <li><a href="#">page 5</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    
    <!-- Feature Area Starts -->
    <section class="feature-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>TASK 1</h4>
                        <p class="py-3">
                            <?php 
                                $variable = 'PHP';
                                echo "This is {$variable} variable! ". gettype($variable);
                            ?>
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>Task 2</h4>
                        <p class="py-3">
                            <?php
                            $boolean = true;
                            var_dump($boolean);
                            ?>
                           
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <h4>Task 3/array</h4>
                        <p class="py-3">
                            <?php
                                $car = array("ford","citroen","BMW");
                                var_dump($car);
                                echo "<hr>";
                                $carName = array (
                                    "ford" => "focus",
                                    "citroen" => "C3",
                                    "BMW" => "M6"
                                );
                                var_dump($carName);
                            ?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Category Area Starts -->
    <section class="category-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>
                            <?php 
                             include "include.php";
                            ?>
                        </h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        
                        <h4>
                            <?php
                             include_once "include_once.php";
                            ?>
                        </h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <h4>
                        <?php
                             require "require.php";
                            ?>
                        </h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Category Area End -->

    <!-- Jobs Area Starts -->
    
    <!-- Jobs Area End -->

    <!-- Newsletter Area Starts -->
    <section class="newsletter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area End -->

    <!-- Employee Area Starts -->
    <section class="employee-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Happy employee</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="employee-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="slide-img employee1">
                                <div class="hover-state">
                                    <div class="hover-text text-center">
                                        <h3>david aron</h3>
                                        <h5>Facebook</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-text align-self-center">
                                <i class="fa fa-quote-left"></i>
                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="slide-img employee2">
                                <div class="hover-state">
                                    <div class="hover-text text-center">
                                        <h3>david aron</h3>
                                        <h5>Twitter</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-text align-self-center">
                                <i class="fa fa-quote-left"></i>
                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Employee Area End -->

    <!-- News Area Starts -->
    <section id="blog" class="news-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Company latest news</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img1"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 20th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img2"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 18th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Apple resorts to promo deals trade to boost</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img news-img3"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 25th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Area End -->

    <!-- Download Area Starts -->
    <section class="download-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="download-text">
                        <h2>Download the app your mobile today</h2>
                        <p class="py-3">Light earth also land can't. May you midst shall lights blessed in lights Have gathered image morning blessed grass him. Appear female rule all seas she'd winged</p>
                        <div class="download-button d-sm-flex flex-row justify-content-start">
                            <div class="download-btn mb-3 mb-sm-0 flex-row d-flex">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                            <div class="download-btn dark flex-row d-flex">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="download-img"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">top products</h3>
                                <ul>
                                    <li class="mb-2"><a href="#">managed website</a></li>
                                    <li class="mb-2"><a href="#">managed reputation</a></li>
                                    <li class="mb-2"><a href="#">power tools</a></li>
                                    <li><a href="#">marketing service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">newsletter</h3>
                                <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                                <form action="#">
                                    <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                    <button type="submit" class="template-btn">subscribe now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-3">
                            <div class="single-widge-home">
                                <h3 class="mb-4">instagram feed</h3>
                                <div class="feed">
                                    <img src="assets/images/feed1.jpg" alt="feed">
                                    <img src="assets/images/feed2.jpg" alt="feed">
                                    <img src="assets/images/feed3.jpg" alt="feed">
                                    <img src="assets/images/feed4.jpg" alt="feed">
                                    <img src="assets/images/feed5.jpg" alt="feed">
                                    <img src="assets/images/feed6.jpg" alt="feed">
                                    <img src="assets/images/feed7.jpg" alt="feed">
                                    <img src="assets/images/feed8.jpg" alt="feed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
