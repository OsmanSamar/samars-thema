<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title() ?>WebSite Name</title>
    <?php wp_head(); ?>
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        /* Position below the dropdown toggle */
        left: 0;
        right: auto;
    }

    /* .navbar-nav .dropdown-menu.show {
            display: block;
            opacity: 1;
            visibility: visible;
        } */

    .navbar-nav .dropdown-item {
        color: #fff;
        padding: 8px 20px;
        border-bottom: 1px solid #fff;
    }

    .navbar-nav .dropdown-item:hover {
        color: #334b3b;
        background-color: #f5a287;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var whatsappIcon = document.querySelector('.whatsapp-fixed');
            whatsappIcon.classList.add('open'); // Trigger the slide-in effect
        }, 900);
    });
    </script>

</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <div class="bg-container">
        <div class="overlay"></div>


        <header class="header">
            <!-- Creating Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light sans-serif">
                <div class="container ">
                    <!-- Bootstrap container start-->
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
                        justify-content: center;   ">
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
                                            doen wij</a></li>
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
                            <li>
                                <a href="https://www.instagram.com" target="_blank"
                                    class="d-block d-lg-none text-center instagram ">
                                    <i class=" fab fa-instagram"></i> <!-- FontAwesome icon -->
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Button on the Right side (visible only on large screens) -->
                    <div class="d-none d-lg-block ms-auto  circle-border">
                        <a href="#" class="btn btn-primary "> Contact </a>
                    </div>

                    <!-- </div> -->

                </div> <!-- Bootstrap container ends-->
            </nav>
        </header>

        <!-- Hero Section -->
        <div>
            <div class="container">
                <!-- Bootstrap container start-->
                <section class="hero">
                    <div class="hero-content">
                        <div>
                            <h1>Tuinen precies </h1>
                            <h1>zoals geplant </h1>
                        </div>
                        <div class="button-line-container">
                            <!-- Buttons -->
                            <div class="button-group">
                                <div class="circle-border">
                                    <a href="#" class="btn btn-primary">Tuin op maat</a>
                                </div>
                                <div class="circle-border">
                                    <a href="#" class="btn btn-secondary">Projecten</a>
                                </div>
                            </div>
                            <!-- End of Button-group -->

                            <!-- Line and Instagram Icon -->
                            <div class="line-container">
                                <div class="line"></div>

                                <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                                    <i class="fab fa-instagram"></i> <!-- FontAwesome icon -->
                                </a>
                                  
                            </div>
                        </div>
                        <!--End of  button-line-container -->
                    </div>
                    <!--End of  hero-content -->
                </section>
            </div> <!-- Bootstrap container ends-->
            <div>
            </div>

            <!-- WhatsApp Icon with fixed position -->
            <div class="whatsapp-fixed ">
                <!-- Background Text with z-index -->
                <div class="background-text">
                    <p>een vraag of advies nodig?</p>
                    <p>Stuur ons een appje!</p>
                </div>

                <a href="https://wa.me/yourphonenumber" target="_blank">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/whatsappicon.svg" alt="WhatsApp Icon"
                        class="whatsapp-icon" />
                </a>
            </div>




            <!-- Close Button -->
            <!-- <div class="close-button">
                <i class="fas fa-times"></i> 
            </div> -->





            <?php wp_footer(); ?>
</body>

</html>