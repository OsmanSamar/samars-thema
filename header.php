<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?> | WebSite Name</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    /* Custom Dropdown Styling */
    .navbar-nav .dropdown-menu {
        background-color: #f5a287;
        border-radius: 5px;
        padding: 10px;
        border: none;
        position: absolute;
        z-index: 1050;
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

    /* Main Style */
    .page {
        background-color: #405F4F
    }

    .image-text-section {
        /* padding: 50px 0; */
        /* Padding to give space around the section */
        /* background-color: #f9f9f9; */
        /* Add a background color to distinguish the section */

    }

    .image-grid {
        display: flex;
        flex-wrap: wrap;
    }

    .image-grid img {
        width: 100%;
        margin: 5px;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .image-text-section {
            display: flex;
            flex-direction: column;
        }

        .text-section {
            order: 1;
        }

        .images-section {
            order: 2;
            display: flex;
            overflow-x: scroll;
        }

        .image-grid {
            flex-wrap: nowrap;
        }

        .image-grid img {
            width: auto;
            height: 100px;
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
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="bg-container">
        <div class="overlay"></div>

        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light sans-serif">
                <div class="container">
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
                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/doen wij')); ?>">Dit doen
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
                    <div class="d-none d-lg-block ms-auto circle-border">
                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <div class="container">
            <section class="hero">
                <div class="hero-content">
                    <h1>Tuinen precies</h1>
                    <h1>zoals geplant</h1>
                    <div class="button-line-container">
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
            </section>
        </div>

        <!-- WhatsApp Icon with fixed position -->
        <div class="whatsapp-fixed">
            <span class="close-button">&times;</span>
            <div class="background-text">
                <p>een vraag of advies nodig?</p>
                <p>Stuur ons een appje!</p>
            </div>
            <a href="https://wa.me/yourphonenumber" target="_blank">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/whatsappicon.svg" alt="WhatsApp Icon"
                    class="whatsapp-icon" />
            </a>
        </div>
    </div>


    <main class="page">
        <div class="container">
            <!-- New Section under Hero Section -->
            <section class="image-text-section">
                <div class="container">
                    <div class="row">

                        <!-- Left side: Text -->
                        <div class="col-lg-6 text-section">
                            <h1>Maak van jouw tuin een bijzondere plek om te zijn.</h1>
                            <p>Maak van jouw tuin een bijzondere plek om te zijn.</p>
                        </div>

                        <!-- Right  side: Images -->
                        <div class="col-lg-6 images-section">
                            <div class="image-grid">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                    alt="Image 1">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                    alt="Image 2">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png" alt="Image 3">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                    alt="Image 4">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png"
                                    alt="Image 5">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
        <?php endwhile; endif; ?> -->
        </div>
    </main>

    <?php wp_footer(); ?>
</body>

</html>