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

    /* Main Style */
    .page {
        background-color: #405F4F
    }


    .text-section {
        position: relative;
        margin-left: -1rem;
        text-align: left;
        color: #FFFFFF;
        padding: 50px 0;

    }



    /* Desktop styles */

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

    /* .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    } */



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


    /* New Section */

    .text-line-button-section {
        padding: 50px 0;
        /* Adjust padding as needed */
    }

    .text-line-button-section .horizontal-divider {
        width: 100%;
        height: 2px;
        /* Line thickness */
        background-color: #fff;
        /* Adjust the color of the line */
        margin: 0 20px;
        /* Adjust spacing between the line and other elements */
    }

    .text-line-button-section h2 {
        font-size: 24px;
        /* Adjust the heading size */
        margin-bottom: 20px;
    }

    .text-line-button-section p {
        font-size: 16px;
        /* Adjust text size */
    }

    .text-line-button-section .btn {
        padding: 10px 20px;
        /* Adjust the button size */
        font-size: 16px;
    }

    /*  */






    /* Mobile styles */
    @media (max-width: 768px) {

        .image-text-section {
            display: flex;
            flex-direction: column;
            color: #FFFFFF;
        }

        .text-section {
            order: 1;
        }

        .images-section {
            order: 2;
            display: flex;
            /* overflow-x: scroll; */
            scroll-behavior: smooth;
            white-space: nowrap;
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



        /*  New Section */

        .text-line-button-section .row {
            flex-direction: column;
            text-align: center;
        }

        .text-line-button-section .horizontal-divider {
            width: 50%;
            /* Reduce width of the line on smaller screens */
            margin: 20px auto;
        }

        .text-line-button-section .text-left,
        .text-line-button-section .text-right {
            text-align: center;
            /* Center-align text and button */
            margin: 0;
        }

        .text-line-button-section .text-left {
            order: 2;
            /* Position text below the line */
            margin-top: 20px;
        }

        .text-line-button-section .text-right {
            order: 3;
            /* Position button below the text */
            margin-top: 20px;
        }

        /* .text-line-button-section .btn {
            margin-top: 20px;
        } */

        /*  */



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
                    <div class="d-none d-lg-block ms-auto circle-border">
                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact</a>
                    </div>
                    <!-- </div> -->
                </div>

            </nav>
        </header>

        <!-- Hero Section -->
        <div class="container mt-50">
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
            <!-- New Section under Hero Section  -->
            <section class="image-text-section">
                <div class="container">
                    <div class="row  g-4">

                        <!-- Left side: Text  -->
                        <div class="col-lg-4 text-center text-section">
                            <h1>Maak van jouw tuin een bijzondere plek om te zijn.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="circle-border">
                                <a href="#" class="btn btn-secondary">Projecten</a>
                            </div>
                        </div>

                        <!-- Right side: Images On Small Screen with Carousel -->
                        <div id="carouselExampleIndicators"
                            class="carousel slide smrow col-lg-6 relative flex items-center group images-section"
                            data-bs-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>

                            <!-- Carousel Inner -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                        class="d-block w-100" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                        class="d-block w-100" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png"
                                        class="d-block w-100" alt="Image 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                        class="d-block w-100" alt="Image 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png"
                                        class="d-block w-100" alt="Image 5">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>



                        <!-- Right  side: Images on Bige Screen  -->
                        <div class=" col-lg-8 images-section2 ">
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

    <div class="container bg-red">

        <!-- New Section after the main section -->
        <section class="text-line-button-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left: Text -->
                    <div class="col-lg-5 text-left">
                        <h2>Custom Heading</h2>
                        <p>Your text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <!-- Center: Horizontal Line -->
                    <div class="col-lg-2 text-center">
                        <div class="horizontal-divider"></div>
                    </div>

                    <!-- Right: Button -->
                    <div class="col-lg-5 text-right">
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </section>




    </div>



    <?php wp_footer(); ?>
</body>

</html>