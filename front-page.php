<?php get_header() ?>
<div class="bg-container">
    <div class="overlay"></div>

    <header class="header">

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
                            <div class="line-hero"></div>
                            <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div>
                    <a class="downarrow" aria-label="Go to the content" href="#Maaktuin">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                            alt="WhatsApp Icon" class="whatsapp-icon" />
                    </a>
                </div>

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
    <div class="container" id="Maaktuin">
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
                                <img class="Rick" src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png"
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
                        <a class="btn btn-primary d-none d-lg-block" href="/contact">Kennismaken? </a>
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
                    <div class="circle-border"> <a href="/contact" class="btn btn-primary">Kennismaken?</a>
                    </div>

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



    <style>
    #demo3 {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 200px;
        width: 200px;
        overflow: hidden;
        position: absolute;
        bottom: -50px;
        transform: translate(50%, 50%);
        /* position: fixed; */
        right: 0;
        /* Position it at the right edge */
        transform: translateY(-50%);
        color: #fff;
        border-radius: 50%;
        font-size: 12px;
        letter-spacing: 3px;
        z-index: 1000;

    }

    #demo3 span {
        position: absolute;

        left: 50%;
        transform-origin: 0 100px;

    }

    @keyframes rotating {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .text-circle {
        animation-duration: 20s;
        animation-iteration-count: infinite;
        animation-name: rotating;
        animation-timing-function: linear;
        height: 200px;
        width: 200px;
        overflow: visible;

    }
    </style>


    <!--Projecten Slider  -->
    <div class="container" style="position: relative;">

        <!-- Circle On The Right Side Of Projecten Slider -->
        <a href="/projecten" id="demo3" class="circle text-circle">
            <div style="position: relative; height: 200px;">
                <?php
        $text = '- Bekijk alle projecten -- Bekijk alle projecten -- Bekijk alle projecten -';
        $characters = str_split($text);
        $totalCharacters = count($characters);
        $rotationStep = 360 / $totalCharacters;


        foreach ($characters as $index => $character) {
            $rotationAngle = $rotationStep * $index;
            echo '<span style="transform: translateX(-50%) rotate(' . $rotationAngle . 'deg);">' . $character . '</span>';
        }
        ?>
            </div>
        </a>



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















    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {

        // slidesPerView: 2.5,

        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 5,
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


    <!--Contact Opnemen Section  -->

    <div class="container mt-20">
        <div class="bottom-text">
            <div class="row">
                <div class="col-lg-6 d-none  d-lg-block position-relative fadeIn visible" data-side="left">
                    <div class="grid-bottom">
                        <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                            src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/bus.png" alt="">
                        <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                            src="//groentuinen.b-cdn.net/wp-content/uploads/2024/08/GROENtuinen-56-scaled.jpg" alt="">
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
                    <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                        <div class="circle-border">
                            <a class="btn btn-primary " href="/contact">Neem contact op </a>
                        </div>
                        <div class="line-contact between d-flex  d-md-flex  d-lg-flex "></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>