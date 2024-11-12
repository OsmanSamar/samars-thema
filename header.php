<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?> GROENtuinen</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />




    <!-- Whatsapp Icon -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var whatsappIcon = document.querySelector('.whatsapp-fixed');
                whatsappIcon.classList.add('open'); // Trigger the slide-in effect

                setTimeout(function () {
                    whatsappIcon.classList.add('adjust-position');
                }, 500); // Delay to adjust position after the animation
            }, 900); // Initial delay before slide-in

            // Close button functionality
            var closeButton = document.querySelector('.close-button');
            if (closeButton) {
                closeButton.addEventListener('click', function () {
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
        $(document).ready(function () {
            $('.nav-item.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>


</head>

<<?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>

        <nav class="navbar navbar-expand-lg   navbar-light sans-serif fadeIn ">

            <div class="container  ">

                <!-- Logo -->
                <a class="navbar-brand " href="<?= esc_url(home_url('/')); ?>">
                    <svg aria-label="GROENtuinen" height="40" loading="lazy" class="mx-auto footer-logo" id="Laag_1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 363.01">
                        <defs>
                        </defs>
                        <g class="animation-wrap">
                            <path class="cls-1"
                                d="M91.33,38.51h146.06V.25H91.33C40.97.25,0,41.22,0,91.58s40.97,91.33,91.75,91.33c1.95-.05,48.22-1.54,73.83-45.87,13.55-23.45,26.84-32.07,32.17-34.03v80.49h38.26v-119.15h-38.26v.02c-16.07.22-42.64,14.32-65.29,53.52-14.63,25.31-40.63,26.71-41.12,26.75-29.27,0-53.08-23.81-53.08-53.08s23.81-53.07,53.08-53.07h0Z">
                            </path>
                            <path class="cls-1  fadeIn "
                                d="M326.54,110.1v73.69h-39.74V.27c115.35,0,117.56-.27,119.76-.27,41.68,0,68.17,22.91,68.17,54.64,0,25.94-14.9,44.99-39.19,49.68l9.94,26.48c2.48,8.83,9.1,11.87,15.45,11.87,4.97,0,9.66-1.65,12.69-3.59v38.92c-11.04,3.59-20.7,5.52-28.98,5.52-22.07,0-34.49-12.14-40.01-32.29l-12.7-41.11h-65.4ZM400.22,75.34c16.56,0,24.84-8.01,24.84-18.78s-8-17.11-23.73-17.11l-74.79.56v35.32h73.68Z">
                            </path>
                            <path class="cls-1"
                                d="M514.49,96c0-58.68,38.64-96,97.14-96s98.25,37.86,98.25,94.13-38.91,96-97.42,96-97.97-37.87-97.97-94.13h0ZM611.63,36.8c-34.22,0-55.46,20.54-55.46,55.47,0,37.06,20.97,61.07,56.02,61.07s56.02-20.54,56.02-55.47c0-37.07-21.53-61.07-56.58-61.07h0Z">
                            </path>
                            <polygon class="cls-1"
                                points="935.08 183.79 760.67 183.79 760.67 .27 930.11 .27 930.11 39.45 800.41 39.45 800.41 68.99 906.93 68.99 906.93 109.28 800.41 109.28 800.41 144.87 935.08 144.87 935.08 183.79 935.08 183.79">
                            </polygon>
                            <path class="cls-1"
                                d="M1200,183.79h-23.83c-10.24,0-20.12-3.78-27.74-10.62l-124.2-111.36v121.98h-39.74V.27h24.01c10.3,0,20.23,3.83,27.88,10.74l123.89,112.07V.27h39.74v183.51h0Z">
                            </path>
                            <polygon class="cls-2"
                                points="198.07 250.33 115.48 250.33 115.48 363.55 82.59 363.55 82.59 250.33 0 250.33 0 219.59 198.07 219.59 198.07 250.33 198.07 250.33">
                            </polygon>
                            <path class="cls-2"
                                d="M256.47,305.29v-85.7h32.9v78.13c0,22.95,12.1,34.42,40.88,34.42s40.89-11.47,40.89-34.42v-78.13h32.89v85.7c0,34.85-27.64,58.44-73.78,58.44s-73.78-23.59-73.78-58.44h0Z">
                            </path>
                            <polygon class="cls-2"
                                points="472.71 363.55 472.71 219.59 505.59 219.59 505.59 363.55 472.71 363.55 472.71 363.55">
                            </polygon>
                            <polygon class="cls-2"
                                points="578.14 220.02 610.93 220.02 610.93 316.07 722.98 220.02 756 220.02 756 363.55 723.21 363.55 723.21 268.15 610.93 363.55 578.14 363.55 578.14 220.02 578.14 220.02">
                            </polygon>
                            <polygon class="cls-2"
                                points="961.68 363.55 817.33 363.55 817.33 219.59 957.57 219.59 957.57 250.33 850.21 250.33 850.21 273.49 938.38 273.49 938.38 305.1 850.21 305.1 850.21 333.02 961.68 333.02 961.68 363.55 961.68 363.55">
                            </polygon>
                            <polygon class="cls-2"
                                points="1200 363.55 1167.21 363.55 1054.94 268.15 1054.94 363.55 1022.14 363.55 1022.14 220.02 1055.16 220.02 1167.21 316.07 1167.21 220.02 1200 220.02 1200 363.55 1200 363.55">
                            </polygon>

                        </g>
                        <style>
                            .cls-1 {
                                transform-origin: center;
                                fill: #f7b39a;
                            }

                            .cls-2 {
                                transform-origin: center;
                                fill: #fff;
                            }

                            .animation-wrap :nth-child(1) {
                                animation-delay: calc(1.5s + 0s);
                            }
                        </style>
                    </svg>
                </a>

                <!-- Hamburger button for mobile -->
                <div class="d-lg-none  " style="border-radius: 9999px; 
                            height: 52px;
                            border: 1px solid #ffffff;">
                    <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"
                        style=" width:40px; height:40px; border-radius:50%; padding:5px; margin:5px; color:#5b7d6c;  background-color:#f5a287;">

                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </button>
                </div>

                <style>
                    .navbar-toggler {
                        border: 0;
                    }

                    .navbar-toggler:focus,
                    .navbar-toggler:active,
                    .navbar-toggler-icon:focus {
                        outline: none;
                        box-shadow: none;
                        border: 0;
                    }


                    /* X Icon */
                    .toggler-icon {
                        width: 28px;
                        height: 2px;
                        /* background-color: #5b7d6c; */
                        background-color: black;
                        display: block;
                        transition: all 0.2s;

                    }

                    .middle-bar {
                        margin: 5px auto;
                    }

                    .navbar-toggler .top-bar {
                        /* transform: rotate(45deg); */
                        transform: rotate(34deg);
                        transform-origin: 10% 10%;
                    }

                    .navbar-toggler .middle-bar {
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }

                    .navbar-toggler .bottom-bar {
                        /* transform: rotate(-45deg); */
                        transform: rotate(-40deg);
                        transform-origin: 10% 10%;
                    }

                    .navbar-toggler.collapsed .top-bar {
                        transform: rotate(0);
                    }

                    .navbar-toggler.collapsed .middle-bar {
                        opacity: 1;
                        filter: alpha(opacity=100);
                    }

                    .navbar-toggler.collapsed .bottom-bar {
                        transform: rotate(0);
                    }

                    .navbar-toggler.collapsed .toggler-icon {

                        background-color: #5b7d6c;
                    }
                </style>





                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse justify-content-lg-end justify-content-start"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Onze diensten
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class=" dropdown-item" href="<?= esc_url(home_url('/dit-doen-wij')); ?>">Dit
                                        doen
                                        wij</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinontwerp')); ?>">Tuinontwerp</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinaanleg')); ?>">Tuinaanleg</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinderhoud')); ?>">Tuinderhoud</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/advies')); ?>">Advies</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- <div class="d-flex align-items-center justify-content-center">
                                <a class="nav-link" href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                                <div>
                                    <a class="downarrow d-block" aria-label="Go to the content" href="#Maaktuin">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                            alt="downarrow Icon" class="downarrow-icon" />
                                    </a>
                                </div>
                            </div> -->
                            <a class="nav-link" href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/over-ons')); ?>">Over ons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/tuinsoorten')); ?>">Tuinsoorten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/projecten')); ?>">Projecten</a>
                            <!--  id="navlinkactive" -->
                        </li>

                        <!-- The button here for smaller screens -->
                        <li><a class="d-block d-lg-none nav-link"
                                href="<?= esc_url(home_url('/contact')); ?>">Contact</a>
                        </li>
                    </ul>

                    <!-- Instagram icon for mobile -->
                    <div class="instagram d-flex d-lg-none text-center">
                        <a href="https://www.instagram.com" target="_blank" class=" ">
                            <i class=" fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Button on the Right side (visible only on large screens) -->
                <div class="circle-border d-none d-lg-block ms-auto ">
                    <div class="d-none d-lg-block ms-auto  ">
                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact</a>
                    </div>

                </div>
            </div>
        </nav>



    </header>


    <?php wp_footer(); ?>

</html>