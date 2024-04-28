<?php 
session_start();

// Check if the current page is not already index.php
if (basename($_SERVER['PHP_SELF']) != 'index.php') {
    // Check if user is not logged in
    if (empty($_SESSION['user_id'])) {
        header('Location: index.php');
        exit();
    }
}
?>

<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 11:06:46 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">

    <title>Dobby - Swimming & Scuba Diving HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>


    <?php
    require ('menu.php');
    ?>


    <div class="home-slider">
        <div class="slider-area owl-carousel owl-theme">
            <div class="slider-item slider-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>PREVALENT SWIMMING & DIVING CENTER</h1>
                                <p>
                                    Here is actually no correlation between swimming and scuba diving. Swimming is the
                                    act of keeping ourselves
                                    above the water. As scuba diving is done under the water than technically we don't
                                    need to know how to swim.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>LEARN SWIMMING THE RIGHT WAY WITH US</h1>
                                <p>
                                    Here is actually no correlation between swimming and scuba diving. Swimming is the
                                    act of keeping ourselves
                                    above the water. As scuba diving is done under the water than technically we don't
                                    need to know how to swim.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>WE WILL MAKE YOU NEXT LEVEL SWIMMER</h1>
                                <p>
                                    Here is actually no correlation between swimming and scuba diving. Swimming is the
                                    act of keeping ourselves
                                    above the water. As scuba diving is done under the water than technically we don't
                                    need to know how to swim.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="brand-area pt-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/1.png" class="brand-logo-one" alt="Images">
                        <img src="assets/img/brand/brand-logo1.png" class="brand-logo-two" alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/2.png" class="brand-logo-one" alt="Images">
                        <img src="assets/img/brand/brand-logo2.png" class="brand-logo-two" alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/3.png" class="brand-logo-one" alt="Images">
                        <img src="assets/img/brand/brand-logo3.png" class="brand-logo-two" alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/4.png" class="brand-logo-one" alt="Images">
                        <img src="assets/img/brand/brand-logo4.png" class="brand-logo-two" alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/5.png" class="brand-logo-one" alt="Images">
                        <img src="assets/img/brand/brand-logo5.png" class="brand-logo-two" alt="Images">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Enjoy Safe and Affordable Diving & Swimming With Us</h2>
                            <p>
                                The introduced now, the they expect, animals the desk, and catch temple. More seven my
                                couldn't
                                it the character using recommended. Fees, more the them. Saw and deep classes create it
                                brief.
                            </p>
                        </div>
                        <div class="about-btn">
                            <a href="about.html" class="default-btn2">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="play-area">
                            <a href="https://www.youtube.com/watch?v=duSPHGiPhwk" class="play-btn">
                                <i class="flaticon-play-button"></i>
                                Play a Video
                            </a>
                        </div>
                        <div class="icon-shape-1">
                            <i class="flaticon-waves"></i>
                        </div>
                        <div class="icon-shape-2">
                            <i class="flaticon-waves"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Services</span>
                <h2>Dobby Provides Services</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch temple.
                    More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="service-item-area owl-carousel owl-theme">
                <div class="service-item">
                    <a href="service-details.html" class="service-item-icon">
                        <i class="flaticon-swimming"></i>
                    </a>
                    <a href="service-details.html" class="service-head">
                        <h3>Swimming & Diving</h3>
                    </a>
                    <p>
                        As sign what each derided to organizaasd tion. Remodelling
                        that, win word as have the proceeded lots subject
                    </p>
                </div>
                <div class="service-item">
                    <a href="service-details.html" class="service-item-icon">
                        <i class="flaticon-teacher"></i>
                    </a>
                    <a href="service-details.html" class="service-head">
                        <h3>Teaching Swimming & Diving</h3>
                    </a>
                    <p>
                        As sign what each derided to organizaasd tion. Remodelling
                        that, win word as have the proceeded lots subject
                    </p>
                </div>
                <div class="service-item">
                    <a href="service-details.html" class="service-item-icon">
                        <i class="flaticon-flipper"></i>
                    </a>
                    <a href="service-details.html" class="service-head">
                        <h3>Swimming Equipments</h3>
                    </a>
                    <p>
                        As sign what each derided to organizaasd tion. Remodelling
                        that, win word as have the proceeded lots subject
                    </p>
                </div>
                <div class="service-item">
                    <a href="service-details.html" class="service-item-icon">
                        <i class="flaticon-swimming"></i>
                    </a>
                    <a href="service-details.html" class="service-head">
                        <h3>Swimming & Diving</h3>
                    </a>
                    <p>
                        As sign what each derided to organizaasd tion. Remodelling that,
                        win word as have the proceeded lots subject
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="apply-area">
        <div class="container">
            <div class="apply-text">
                <span>Apply for Job</span>
                <h2>We Are Hiring Expertise for Three Different Categories</h2>
                <p>
                    It willingly room, drew even in place structure he its holding to view. Need harder my in how
                    there's into receive wanted ambushed that home, his this it position. Room, on by was it heard
                    parks.
                    Compared one Room. Testimony you mister music.Discipline assets briefs with tone completely
                </p>
                <div class="apply-btn">
                    <a href="#" class="default-btn1">Apply Now</a>
                    <a href="#" class="default-btn2 ml-20">Our Career</a>
                </div>
            </div>
        </div>
    </div>


    <div class="course-area pt-100 pb-70">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-7 col-xxl-6">
                    <div class="course-item">
                        <div class="course-text">
                            <span>Swimming Course</span>
                            <h2>Swimming Course Taken by Our Most Experienced Trainer</h2>
                            <p>
                                Attempt. Origin it the get and the been came into the fitted would another behind think
                                insur is ance sister hell
                                mild, back least on war, can of, remote become into and and that the that as a me
                                skyline was first him many instruments,
                                nearby a to he purpose series helplessly didn't has a long question tricoloured half
                                here, the links needed in considerable.
                            </p>
                            <p>
                                Months known was first own, them. Travelling of by velocity agreed by clock of this
                                to dedicat ed with days, and on viewings the brought we her with been decision-making.
                            </p>
                            <div class="course-btn">
                                <a href="courses.html" class="default-btn2">Take Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <div class="course-img">
                        <img src="assets/img/course/1.jpg" alt="Course Images">
                    </div>
                    <div class="course-dots">
                        <img src="assets/img/shape/dots-blue.png" alt="Dots Images">
                    </div>
                </div>
            </div>
            <div class="course-another pt-70">
                <div class="row">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="course-img-2">
                            <img src="assets/img/course/2.jpg" alt="Course Images">
                        </div>
                        <div class="course-dots-2">
                            <img src="assets/img/shape/dots-pink.png" alt="Dots Images">
                        </div>
                    </div>
                    <div class="col-lg-7 col-xxl-6">
                        <div class="course-item-2">
                            <div class="course-text">
                                <span>Diving Course</span>
                                <h2>Diving Course Taken by Our Most Experienced Trainer</h2>
                                <p>
                                    Attempt. Origin it the get and the been came into the fitted would another behind
                                    think insur is ance sister hell
                                    mild, back least on war, can of, remote become into and and that the that as a me
                                    skyline was first him many instruments,
                                    nearby a to he purpose series helplessly didn't has a long question tricoloured half
                                    here, the links needed in considerable.
                                </p>
                                <p>
                                    Months known was first own, them. Travelling of by velocity agreed by clock of this
                                    to dedicat ed with days, and on viewings the brought we her with been
                                    decision-making.
                                </p>
                                <div class="course-btn">
                                    <a href="courses.html" class="default-btn2">Take Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-shape-3">
            <i class="flaticon-swimming"></i>
        </div>
        <div class="icon-shape-4">
            <i class="flaticon-diver"></i>
        </div>
    </div>


    <section class="product-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Products </span>
                <h2>Buy the Equipment You Need</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch
                    temple. More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="assets/img/product/1.jpg" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Diving Glass</h3>
                                </a>
                                <span>$35</span>
                            </div>
                            <a href="#" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="assets/img/product/2.jpg" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Diving Rite</h3>
                                </a>
                                <span>$30</span>
                            </div>
                            <a href="#" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="assets/img/product/3.jpg" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Fins Bungee</h3>
                                </a>
                                <span>$75</span>
                            </div>
                            <a href="#" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="assets/img/product/4.jpg" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Life Jacket</h3>
                                </a>
                                <span>$25</span>
                            </div>
                            <a href="#" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Gallery</span>
                <h2>Amazing Photos at Our Daily Dobby</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch
                    temple. More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="gallery-view">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/1.jpg">
                                <img src="assets/img/gallery/1.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>Baby Girl Learn Swimming</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/2.jpg">
                                <img src="assets/img/gallery/2.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>John at His Swim Event</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/3.jpg">
                                <img src="assets/img/gallery/3.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>Scuba Diving Instruction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/4.jpg">
                                <img src="assets/img/gallery/4.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>Under Water Scuba Diving</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/5.jpg">
                                <img src="assets/img/gallery/5.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>Mike’s Frist Dive for Dobby</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/6.jpg">
                                <img src="assets/img/gallery/6.jpg" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>Boy Learning Swimming</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trainers-area pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Trainers</span>
                <h2>Our Professional Trainers</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch temple.
                    More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="assets/img/trainers/1.jpg" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>John Doe</h3>
                            </a>
                            <span>Professional Diver</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="assets/img/trainers/2.jpg" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>Evana Doe</h3>
                            </a>
                            <span>Professional Trainer</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="assets/img/trainers/3.jpg" alt="Trainers Images">
                        </a>
                        <div class="trainer-content active">
                            <a href="instructor.html">
                                <h3>Smith Doe</h3>
                            </a>
                            <span>Professional Swimmer</span>
                            <div class="social-icon active">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="assets/img/trainers/4.jpg" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>Marida Doe</h3>
                            </a>
                            <span>Professional Instructor</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-area pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our News</span>
                <h2>Daily Updates of Our Dobby</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch temple.
                    More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/1.jpg" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="#">SCUBA DIVING</a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href>John Doe</a>
                            </li>
                            <li>26 APR 2019</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>New Scuba Diving Course Sheet Will Update Soon</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/2.jpg" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="#">
                                    SWIMMING EVENT
                                </a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="#">John Doe</a>
                            </li>
                            <li>27 APR 2019</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>A Diving Event Will Happen at Dobby Center</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/3.jpg" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="#">EQUIPMENT</a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="#">John Doe</a>
                            </li>
                            <li>28 APR 2019</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>A Swimming Event Will Happen at Dobby Center</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    require ('footer.php');
    ?>


    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 11:06:48 GMT -->

</html>