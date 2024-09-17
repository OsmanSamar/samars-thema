<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?> | WebSite Name</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <style>
    /* Custom Dropdown Styling */
    .navbar-nav .dropdown-menu {
        background-color: #f5a287;
        border-radius: 5px;
        padding: 10px;
        border: none;
        /* position: absolute;
        z-index: 3;
        top: 100%;
        left: 0;
        width: 100%; */
    }

    /* Ensure dropdown menu is correctly positioned relative to the toggle */
    .navbar-nav .dropdown-menu {
        top: 100%;
        left: 0;
        right: auto;
    }

    .navbar-nav .dropdown-item {
        color: #fff;
        padding: 8px 20px;
        border-bottom: 1px solid #fff;
    }

    .navbar-nav .dropdown-item:hover {
        color: #334b3b;
        background-color: #f5a287;
    }


    /* Show the dropdown menu on hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Main Style */
    .page {
        background-color: #405F4F
    }


    .text-section {
        position: relative;
        /* margin-left: -1rem; */
        text-align: left;
        color: #FFFFFF;
        padding: 50px 0;

    }

    .text-section h1 {

        font-size: 40px;
        opacity: 1;
        letter-spacing: 0px;
    }

    .text-section p {

        font-size: 14px;
        opacity: 1;
        letter-spacing: 0px;
        margin-top: 10px;

    }

    /* Desktop styles */


    /* Enthousiast Section */

    .bottom-text {
        margin-bottom: 45px;
        padding-bottom: 200px;
        padding-top: 165px;
        position: relative;
    }

    .row {

        display: flex;
        flex-wrap: wrap;
        margin-left: -.75rem;
        margin-left: calc(var(--bs-gutter-x)* -.5);
        margin-right: -.75rem;
        margin-right: calc(var(--bs-gutter-x)* -.5);
        margin-top: 0;
        margin-top: calc(var(--bs-gutter-y)* -1);
    }

    .bottom-text .grid-bottom {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(12, 1fr);
        height: calc(100% + 230px);
        margin-bottom: -100px;
        margin-top: -130px;
        position: absolute;
        grid-gap: 25px;
    }


    .bottom-text .grid-bottom :first-child {
        grid-area: 3 / 1 / 13 / 4;
    }

    .bottom-text .grid-bottom :nth-child(2) {
        grid-area: 1 / 4 / 7 / 7;
    }


    .bottom-text .grid-bottom :nth-child(3) {
        grid-area: 7 / 4 / 13 / 6;
    }

    .line.left,
    .line.right {
        display: flex;
    }

    .line {
        display: flex;
        align-items: center;
        gap: 30px;
        position: relative;
    }


    .line::after {
        content: "";
        flex-grow: 1;
        height: 1px;


        margin-left: 30px;
    }

    /*End of  Enthousiast Section */

    /*CircleType.js Style  */
    /* 1 */

    /* .text-circle {
        animation-duration: 20s;
        animation-iteration-count: infinite;
        animation-name: rotating;
        animation-timing-function: linear;
        height: 200px;
        width: 200px;

        position: relative;
        right: 0;
    }

    #demo3 {
        height: 160px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;

    }

    @keyframes rotating {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        50% {
            transform: translate(-50%, -50%) rotate(180deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(1turn);
        }
    } */


    /* 2 */
    /* #textdemo {
        height: 400px;
        width: 200px;
        font-size: 16px;
        font-weight: 600;
        animation: animate 5s linear infinite;
        position: absolute;
        transform-origin: 0 80px;

    }

    @keyframes animate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    } */


    /*  /*CircleType.js Style  */






    /* Instagram */

    /* .socials {
        bottom: 70px;
        gap: 25px;
        position: absolute;
        right: 0;
    } */


    /* Line With two buttons on hero section */

    /* .line {
        align-items: center;
        display: flex;
        gap: 20px;
        position: relative;
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .line.left,
    .line.right {
        display: flex;
    }



    line.center:after,
    .line.center:before,
    .line.left:before,
    .line.right:after {
        content: "";
    }

    .line:after,
    .line:before {
        background-color: #fff;
        display: block;
        flex-grow: 1;
        height: 1px;
        opacity: .5;
        position: relative;
    } */


    /* Line With two buttons on hero section */




    .images-section2 {
        position: relative;
        margin: 0;
        /* Reset the margin if necessary */
        transform: translate(14rem, -6.5rem);
        /* Moves right by 14rem, and up by 6.5rem */
    }




    .row2 {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        margin: 2.5rem 0 0 -1rem;

    }


    /* Create four equal columns that sits next to each other */
    .column1 {
        flex: 20%;
        max-width: 20%;
        padding: 0 4px 4px 0;
    }

    .column2 {
        flex: 30%;
        max-width: 30%;
        padding: 0 4px;
    }

    .column3 {
        flex: 20%;
        max-width: 20%;
        padding: 0 4px;
    }




    /* Optional: fine-tune the specific images in each column */


    .column1 .backyardgarden {
        margin-top: 3rem;

    }



    .column1 img,
    .column2 img {
        margin-bottom: 0.5rem;
        /* Adds space between the two images */
    }



    .column3 img {
        margin-top: 3rem;

    }


    .smrow {
        display: none;
    }






    /* its work here  on sm Screen  */
    .text-line-button-section .row {
        flex-direction: row;
        text-align: center;
    }

    .text-line-button-section .horizontal-divider {
        order: 1;
        margin: 20px auto;
        width: 50%;
    }

    .text-line-button-section .text-left {
        order: 2;
        margin-top: 20px;
    }

    .testimonials-section-sm {
        order: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .testimonial {
        margin-bottom: 20px;
        text-align: center;
    }

    .testimonial-img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .text-line-button-section .text-right {
        order: 4;
        margin-top: 20px;
    }


    /*  */

    /* New Section */

    .text-line-button-section {
        padding: 50px 0;

    }



    .text-line-button-section h2 {
        font-size: 24px;

        margin-bottom: 20px;
    }

    .text-line-button-section p {
        font-size: 16px;

    }

    .text-line-button-section .btn {
        padding: 10px 20px;

        font-size: 16px;
    }

    /*  */

    /* Styling for the horizontal divider Lg Screen */

    /* .text-line-button-section .text-left {
        order: 1;
        margin-top: 20px;
    }

    .text-line-button-section .horizontal-divider {
        order: 2;
        width: 50%;
        height: 2px;
        background-color: red;
        margin: 20px auto;
    } */





    /*  */

    .testimonial h1 {
        color: #F5A287;
        font-size: 22px;

    }

    .testimonial p {
        color: #FFFFFF;
        font-size: 18px;
    }


    /* Line on Small Screen  */
    .line.height {


        border-left: 2px solid white;
        height: 78px;
        position: absolute;
        left: 50%;
        opacity: .5;
        margin-bottom: 10px;
        margin-left: -3px;
        top: 139px;
    }

    .line {
        justify-content: center;
    }

    .line {
        align-items: center;
        display: flex;
        gap: 20px;
        position: relative;
    }


    /*swiper  */

    /* .swiper {

        width: 100%;
        height: 100%;
    } */

    .swiper {
        width: 100%;
        height: 300px;
        margin: 20px auto;
    }

    /* Large Screen */
    .swiper-slide {

        display: block;
        justify-content: center;
        align-items: center;
        width: calc(100% / 2.5);
        transform: scale(1.2);
        border-radius: 12px;
    }


    .swiper-slide img {

        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .swiper-slide img:focus {
        border-radius: 12px;
    }




    /* .append-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .append-buttons button {
        display: inline-block;
        cursor: pointer;
        border: 1px solid #007aff;
        color: #007aff;
        text-decoration: none;
        padding: 4px 10px;
        border-radius: 4px;
        margin: 0 10px;
        font-size: 13px;
    }

    */
    /* HR With Text */

    .hr-text {
        border: 0;
        /* line-height: 1em; */
        position: relative;
        text-align: center;
        height: 1.5em;
        margin: 30px 15px;
        color: white;
        font-size: 39px;
        font-weight: 300;
        line-height: 60px;

    }

    /* This is the visible line we want to achieve */
    .hr-text::before {
        content: "";
        background: #fff;
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;

    }



    /* Text Style */
    .hr-text::after {
        content: attr(data-content);
        position: relative;
        padding: 0 7px;
        line-height: 1.5em;
        color: white;
        background-color: #405F4F;

    }




    /*  */


    /* max-width: 768px */
    /* Mobile and Tablet styles */
    @media (max-width: 1024px) {


        .image-text-section {}


        .image-text-section {
            display: flex;
            flex-direction: column;

        }

        .text-section {
            order: 1;

        }

        .swiper-wrapper {


            box-sizing: content-box;
            display: flex;
            height: 100%;
            position: relative;
            transition-property: transform;
            transition-timing-function: ease;
            transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
            width: 100%;
            z-index: 1;
        }

        .swiper {

            display: block;
            list-style: none;
            margin-left: auto;
            margin-right: auto;
            overflow: visible;
            padding: 0;
            position: relative;
            z-index: 1;
        }


        .swiper-slide {

            display: block;
            flex-shrink: 0;
            height: 100%;
            position: relative;
            margin-right: 2px;
            width: calc(100% / 2.5);
            transform: scale(1.2);
        }

        /*  display: block;
            flex-shrink: 0;
            height: 100%;
            position: relative;
            margin-right: 2px;
            width: calc(100% / 2.5);
            transform: scale(1.2); */

        .swiper-slide img {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }



        /* Position navigation buttons below the images */
        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            bottom: -30px;
            width: 44px;
            height: 44px;
            z-index: 10;
        }

        .swiper-button-next {
            right: 10px;

        }

        .swiper-button-prev {
            left: 10px;

        }


        .images-section {
            order: 2;
            display: flex;
            flex-direction: row;
            /* overflow-x: scroll; */
            scroll-behavior: smooth;
            white-space: nowrap;
            justify-content: center;
            align-items: center;
        }

        .row2 {
            display: none;

        }

        .carousel-item img {
            width: 100%;
            /* Ensures images take full width of the carousel */
            height: auto;
            /* Adjust height for responsive design */
        }

        .smrow .carousel {
            width: 100%;
            /* Ensures carousel takes full width on small screens */
            margin: 0 auto;
        }

        .smrow .carousel-item img {
            width: 322px;
            /* Set a fixed width for all images */
            height: 404px;
            /* Set a fixed height for all images */
            object-fit: cover;
            /* Ensures the image covers the area without stretching */
        }

        .carousel-indicators button {
            background-color: #000;

        }


        .text-line-button-section .row {
            flex-direction: column;
            text-align: center;
        }

        /* Ensure the line appears first on Mobile styles */
        .text-line-button-section .horizontal-divider {
            order: 1;
            margin-bottom: 20px;
            width: 50%;
            height: 2px;
            background-color: white;
            text-align: center;
        }



        /* Text appears after the line */
        .text-line-button-section .text-left {
            order: 2;
            margin-top: 20px;
        }

        /* Testimonials come next */
        .testimonials-section-sm {
            order: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .testimonial {
            margin-bottom: 20px;
            text-align: center;
        }

        .testimonial-img {
            max-width: 84px;
            height: 126px;
            margin-bottom: 10px;

        }

        /* Button comes last */
        .text-line-button-section .text-right {
            order: 4;
            margin-top: 20px;
        }

        /* End of New Section */
    }


    /* Large screen layout */
    @media (min-width: 769px) {

        .testimonials-section-sm {}

        .col-lg-9 {
            flex: 0 0 auto;
            width: 75%;
        }

        .testimonials-section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 40px;
        }

        .testimonial {
            text-align: center;
        }


        .testimonial h1 {
            color: #F5A287;
            font-size: 22px;
            font-family: 'Inclusive Sans', sans-serif;
        }

        .testimonial p {
            color: #FFFFFF;
            font-size: 18px;
            font-family: 'Inclusive Sans', sans-serif;
        }


        .testimonial-img {
            max-width: 84px;
            height: 126px;
            margin-bottom: 10px;

        }

    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var whatsappIcon = document.querySelector('.whatsapp-fixed');
            whatsappIcon.classList.add('open'); // Trigger the slide-in effect

            setTimeout(function() {
                whatsappIcon.classList.add('adjust-position');
            }, 500); // Delay to adjust position after the animation
        }, 900); // Initial delay before slide-in

        // Close button functionality
        var closeButton = document.querySelector('.close-button');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                var whatsappIcon = document.querySelector('.whatsapp-fixed');
                whatsappIcon.classList.remove('open', 'adjust-position');
                whatsappIcon.classList.add('hide'); // Hide the icon after closing
            });
        }
    });
    </script>



    <!-- jQuery for dropdown menu -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.nav-item.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
    </script>





</head>

<<?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="bg-container">
        <div class="overlay"></div>

        <header class="header">
            <nav class="navbar navbar-expand-lg  navbar-light sans-serif">

                <div class="container ">
                    <!-- Hier can word the hamburfer menu on small screen on right side  -->
                    <!-- <div class="position-relative d-flex w-100"> -->
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenlogo.png"
                            alt="<?php bloginfo('name'); ?>" />
                    </a>

                    <!-- Hamburger button for mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        padding: 0;
                        align-items: center;
                        justify-content: center;">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation Menu -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Onze diensten
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/doen wij')); ?>">Dit
                                            doen
                                            wij</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?= esc_url(home_url('/tuinontwerp')); ?>">Tuinontwerp</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?= esc_url(home_url('/page-slug-3')); ?>">Tuinaanleg</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?= esc_url(home_url('/page-slug-4')); ?>">Tuinderhoud</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?= esc_url(home_url('/page-slug-5')); ?>">Advies</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/tuinsoorten')); ?>">Tuinsoorten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/over-ons')); ?>">Over ons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/projecten')); ?>">Projecten</a>
                            </li>

                            <!-- The button here for smaller screens -->
                            <li><a class="d-block d-lg-none nav-link"
                                    href="<?= esc_url(home_url('/contact')); ?>">Contact</a></li>
                        </ul>

                        <!-- Instagram icon for mobile -->
                        <div class="instagram d-flex d-lg-none text-center">
                            <a href="https://www.instagram.com" target="_blank" class=" ">
                                <i class=" fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Button on the Right side (visible only on large screens) -->
                    <div class="circle-border">
                        <div class="d-none d-lg-block ms-auto  ">
                            <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact</a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <div class="container mt-5">
            <section class="hero">
                <div class="hero-content">
                    <div class="col-12 col-lg-12  pe-0 pe-lg-5">
                        <h1>
                            <span class="d-lg-none d-block">
                                <span style="--i:1;">Tuinen</span> <br> <span style="--i:2;">precies</span> <span
                                    style="--i:3;">zoals</span> <br> <span style="--i:4;">geplant</span>
                            </span>
                            <span class="d-none d-lg-block">
                                <span style="--i:1;">Tuinen</span> <span style="--i:2;">precies</span> <br> <span
                                    style="--i:3;">zoals</span> <span style="--i:4;">geplant</span> <span
                                    style="--i:5;"></span>
                            </span>
                        </h1>
                    </div>
                    <!-- Line for Small Screen -->
                    <div class="line height d-flex d-md-none d-lg-none" style="--height:80px"></div>



                    <div>
                        <div class=" button-line-container">
                            <div class="button-group">
                                <div class="circle-border">
                                    <a href="#" class="btn btn-primary">Tuin op maat</a>
                                </div>
                                <div class="circle-border">
                                    <a href="#" class="btn btn-secondary">Projecten</a>
                                </div>
                            </div>
                            <div class="line-container">
                                <div class="line"></div>
                                <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                    </div>


                    <!--1 Trying line right With socials   -->

                    <!-- <div class="line right">
                        <div class="buttons d-flex flex-column align-items-center flex-lg-row gap-4">
                            <a href="/contact" class="btn btn-secondary">
                                Tuin op maat
                            </a>
                            <a href="/projecten" class="btn btn-primary">
                                Projecten
                            </a>
                        </div>
                    </div>
                    <div class="socials d-none d-lg-flex flex-column">
                        <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div> -->


                </div>
            </section>
        </div>

        <!-- WhatsApp Icon with fixed position -->
        <div class="whatsapp-fixed">
            <span class="close-button">&times;</span>
            <div class="background-text">
                <span>Een vraag of advies nodig?</span>
                <span>Stuur ons een appje!</span>
            </div>
            <a href="https://wa.me/yourphonenumber" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/whatsappicon.svg" alt="WhatsApp Icon"
                    class="whatsapp-icon" />
            </a>
        </div>
    </div>
    <!-- End Of bg-container -->


    <main class="page">
        <div class="container">
            <!-- New Section under Hero Section  -->
            <section class="image-text-section">
                <div class="container">
                    <div class="row  g-4">

                        <!-- Left side: Text  -->
                        <div class="col-lg-4 text-center  text-section">
                            <h1 style="font-size: 40px;">Maak van jouw tuin een bijzondere plek om te zijn.</h1>
                            <p style="font-size: 15px;">Met een tuin van GROENTuin maak je jouw tuin uniek. Speciaal
                                ontworpen,aangelegd en onderhouden voor jou.</p>
                            <div class="circle-border">
                                <a href="#" class="btn btn-secondary">Projecten</a>
                            </div>
                        </div>


                        <!-- Swiper On Small Screen -->

                        <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider "
                            style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                        class=" " alt="Image 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                        class=" " alt="Image 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png" class=" "
                                        alt="Image 3">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                        class="" alt="Image 4">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png" class=" "
                                        alt="Image 5">
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>

                        </div>


                        <!-- Right  side: Images on Bige Screen  -->
                        <div class="container col-lg-8 images-section2 ">
                            <div class="row2">
                                <div class="column1">
                                    <img class="backyardgarden"
                                        src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                        alt="Image 1">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                        alt="Image 4">
                                </div>
                                <div class="column2">
                                    <img class="Rick"
                                        src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png"
                                        alt="Image 2">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                        alt="Image 5">
                                </div>
                                <div class="column3">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png"
                                        alt="Image 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <div class="container ">

        <!-- New Section after the main section -->
        <section class="text-line-button-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="  col-lg-2 text-center d-lg-none order-1">
                        <div class="horizontal-divider"></div>
                    </div>
                    <div class="col-lg-5 text-left  d-lg-none order-2">
                        <p>Waarom GroenTuinen?</p>
                    </div>



                    <div class="title d-none d-lg-flex align-items-center gap-3">
                        <h2 class="mb-0  ">Waarom GROENtuinen?</h2>
                        <div class="line between d-none d-lg-block"></div>
                        <div class="circle-border">
                            <a class="btn btn-secondary d-none d-lg-block" href="/contact"> Kennismaken?</a>
                        </div>
                    </div>


                    <!-- Testimonials Section on Small Screen -->
                    <div class="row testimonials-section-sm d-md-none text-center2">
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt</span></p>

                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur</span></p>
                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                                class="testimonial-img" />
                            <h1>Écht out of the box</h1>
                            <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                    aanleg</span></p>
                        </div>
                    </div>

                    <!-- Right: Button (Will be under testimonials on small screens) -->
                    <div class="col-lg-5 text-right d-sm-block d-md-block d-lg-none">
                        <a href="/contact" class="btn btn-primary">Kennis maken?</a>
                    </div>

                </div>



                <!-- Testimonials Section on Large Screen -->
                <div class="row testimonials-section d-none d-md-flex">
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Vakkundig maatwerk</h1>
                        <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                gemaakt</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Passie voor groen</h1>
                        <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                natuur</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                            class="testimonial-img  " />
                        <h1>Écht out of the box</h1>
                        <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                aanleg</span></p>
                    </div>
                </div>
            </div>
        </section>



        <!--Projecten Slider  -->
        <div class="container">
            <!-- HR With Text -->
            <div class=" mt-50 mb-50">
                <hr class="hr-text gradient" data-content="Projecten">
            </div>

            <div #swiperRef="" class="swiper mySwiper projecten-slider"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/08/GROENtuinen-12-scaled.jpg" alt=""
                            class="">
                    </div>

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png" class=""
                            alt="Image 2">
                    </div>

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png" class=""
                            alt="Image 2">
                    </div>


                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>
        </div>


        <!-- Circle On The Right Side Of Projecten Slider -->


        <!-- 1 -->
        <!-- <a href="/projecten" id="demo3" class="circle text-circle mob-invisible">
            - Bekijk alle projecten -- Bekijk alle projecten -- Bekijk alle projecten -
        </a>
        <script src="https://cdn.jsdelivr.net/npm/circletype@2.3.1/dist/circletype.min.js">
        </script>
        <script>
        new CircleType(document.getElementById('demo3'));
        </script> -->


        <!--  2-->
        <!-- <a href="/projecten" id="textdemo" class=" text-circle mob-invisible">
            - Bekijk alle projecten -- Bekijk alle projecten -- Bekijk alle projecten -
        </a>
        <script>
        const textdemo = document.getElementById('textdemo');

        // Replace each non-whitespace character with a span
        textdemo.innerHTML = textdemo.textContent.replace(/\S/g, "<span>$&</span>");

        // Select all span elements within the textdemo element
        const spans = textdemo.querySelectorAll('span');

        // Apply transformation to each span element
        for (var i = 0; i < spans.length; i++) {
            spans[i].style.transform = "rotate(" + (i * 16.5) + "deg)";
        }
        </script> -->
        <!-- Circle On The Right Side Of Projecten Slider -->





        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {

            // slidesPerView: 2.5,

            slidesPerView: 1.2,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                992: {

                    slidesPerView: 3.5,
                }
            }
        });

        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
        </script>


        <!--  -->

        <div class="container">
            <div class="bottom-text">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block position-relative fadeIn visible" data-side="left">
                        <div class="grid-bottom">
                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/bus.png" alt="">
                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="//groentuinen.b-cdn.net/wp-content/uploads/2024/08/GROENtuinen-56-scaled.jpg"
                                alt="">
                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/bg.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 fadeIn visible" data-side="right">
                        <h2>Enthousiast?<br> Laat het ons weten</h2>
                        <div class="col-lg-9">
                            <div class="text">
                                <p><span style="font-weight: 400;">Ook een uniek tuinontwerp? Of op zoek naar de
                                        hovenier voor jouw klus? Ga vrijblijvend in gesprek met GROENtuinen!</span></p>
                            </div>
                        </div>
                        <div class="line-full line right offwhite align-items-center mt-8">
                            <a class="btn btn-secondary " href="/contact">Neem contact op</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <?php wp_footer(); ?>

    <!-- </body> -->

</html>