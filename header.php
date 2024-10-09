<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?> | WebSite Name</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />





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
    <header>

        <nav class="navbar navbar-expand-lg   navbar-light sans-serif">

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
                <div class="collapse navbar-collapse justify-content-lg-end justify-content-start"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Onze diensten
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/dit-doen-wij')); ?>">Dit
                                        doen
                                        wij</a></li>
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
                            <a class="nav-link" href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= esc_url(home_url('/over-ons')); ?>">Over ons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= esc_url(home_url('/tuinsoorten')); ?>">Tuinsoorten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= esc_url(home_url('/projecten')); ?>">Projecten</a>
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
                <div class="circle-border d-none d-lg-block ms-auto">
                    <div class="d-none d-lg-block ms-auto  ">
                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact</a>
                    </div>

                </div>
            </div>
        </nav>



    </header>


    <?php wp_footer(); ?>

</html>