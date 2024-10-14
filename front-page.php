<?php get_header() ?>


<div class="bg-container">

    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1200px;

    }
    </style>


    <div class="overlay"></div>



    <!-- Hero Section -->
    <div class="container my-4">
        <div style="   
     color: #fff;
    /* min-height: 100vh; */
    /* padding-bottom: 150px;
    padding-top: 100px;  */
    
    ">

        </div>

        <section class="hero">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
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
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style=" white-space: nowrap;">Tuin op maat</a>
                            </div>
                            <div class="circle-border">
                                <a href="<?= esc_url(home_url('/projecten')); ?>"
                                    class="btn btn-secondary">Projecten</a>
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
                            alt="downarrow Icon" class="downarrow-icon" />
                    </a>
                </div>

            </div>
        </section>

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
                    <div class="col-lg-3   text-section" style="margin-top:8px;">
                        <h1 style="font-size: 40px;">Maak van jouw tuin een bijzondere plek om te zijn.</h1>
                        <p style="font-size: 15px;">Met een tuin van GROENTuin maak je jouw tuin uniek. Speciaal
                            ontworpen,aangelegd en onderhouden voor jou.</p>
                        <div class="circle-border">
                            <a href="<?= esc_url(home_url('/projecten')); ?>" class="btn btn-secondary">Projecten</a>
                        </div>
                    </div>


                    <!-- Swiper On Small Screen -->


                    <div id="swiperRef" class="swiper mySwiper smrow order-2 projecten-slider d-flex d-lg-none"
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

                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination"></div>

                    </div>









                    <!-- Right  side: Images on Bige Screen  -->
                    <div class="container col-lg-9 images-section2 ">
                        <div class="row2">
                            <div class="column1">
                                <img class="backyardgarden"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/69scaled.jpg"
                                    alt="Image 1">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/13scaled.jpg"
                                    alt="Image 4" class="img2">
                            </div>
                            <div class="column2">
                                <img class="Rick"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/56scaled.jpg"
                                    alt="Image 2">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/16scaled.jpg"
                                    alt="Image 5">
                            </div>
                            <div class="column3">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/43scaled.jpg"
                                    alt="Image 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


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



                    <div class="title d-none d-lg-flex align-items-center gap-1">
                        <h2 class="mb-0  ">Waarom GROENtuinen?</h2>
                        <div class="line between d-none d-lg-block"></div>
                        <div class="circle-border">
                            <a class="btn btn-primary d-none d-lg-block" href="/contact">Kennismaken? </a>
                        </div>
                    </div>


                    <!-- Testimonials Section on Small Screen -->
                    <div class="row testimonials-section-sm d-md-none text-center2">
                        <div class="col-12 col-lg-3 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt</span></p>

                        </div>
                        <div class="col-12 col-lg-3 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur</span></p>
                        </div>
                        <div class="col-12 col-lg-3 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                                class="testimonial-img" />
                            <h1>Écht out of the box</h1>
                            <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                    aanleg</span></p>
                        </div>
                    </div>

                    <!-- Right: Button (Will be under testimonials on small screens) -->
                    <div class="col-lg-5 text-right d-sm-block d-md-block d-lg-none">
                        <div class="circle-border"> <a href="/contact" class="btn btn-primary"
                                style=" white-space: nowrap;">Kennismaken?</a>
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
        .swiper-container-fullwidth {
            width: 100vw;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hide the CircleType by default */
        #demo3 {
            display: none;
        }

        /* Show the CircleType on devices with a width of 1024px and up */
        @media (min-width: 1024px) {
            #demo3 {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 200px;
                width: 200px;
                overflow: hidden;
                position: absolute;
                bottom: -129px;
                /* bottom: -50px; */
                transform: translate(50%, 50%);
                /* position: fixed; */
                right: 0;
                /* right: 0; */
                /* Position it at the right edge */
                transform: translateY(-50%);
                color: #fff;
                border-radius: 50%;
                font-size: 12px;
                letter-spacing: 3px;
                z-index: 1000;

            }
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





        /* Show text and button for devices less than 1024px */
        @media (max-width: 1023px) {


            .slider-text-button-container {
                position: absolute;
                /* Position from bottom */
                bottom: 20px;
                width: 100%;
                justify-content: space-between;
                /* Add padding from edges */
                padding: 0 20px;
                box-sizing: border-box;
                z-index: 1000;
                margin-bottom: 40px;
            }

            .slider-text-button-container-right {
                position: absolute;
                bottom: -38px;
                right: 0px;
                width: 100%;
                /* Add padding from edges */
                padding: 0 20px;
                box-sizing: border-box;
                z-index: 1000;


            }

            .line-before {
                border: 1px #fff solid;
                width: 100%;
                height: 1px;
            }
        }



        /* Text styling */
        .slider-text-button-container .text {


            /* Take up available space */
            flex: 1;
            text-align: left;

        }

        /* Button styling */
        .slider-text-button-container button {

            /* Do not grow */
            flex: 0;
            text-align: right;

        }
        </style>







        <!-- Full-Width Swiper Slider -->
        <div class="swiper-container-fullwidth"
            style="position: relative; margin-bottom:70px; width: 100vw; left: 50%; transform: translateX(-50%);">

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

            <!-- HR With Text swiper on Sm Screen -->
            <div class="container mt-50 mb-50">
                <hr class="hr-text gradient" data-content="Projecten">
            </div>

            <!-- Swiper Slider -->
            <div #swiperRef="" class="swiper mySwiper projecten-slider"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="width:;">
                        <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/08/GROENtuinen-12-scaled.jpg" alt=""
                            class="">
                        <!-- Overlay Text and Button -->
                        <div class="slider-text-button-container d-flex d-lg-none">
                            <div class="text" style=" white-space: nowrap;">Tuin in Voorthuizen</div>
                            <div
                                class="slider-text-button-container-right d-flex align-items-center justify-content-center ">
                                <div class="line-before"></div>
                                <div class="circle-border">
                                    <a class="btn btn-secondary" href="/contact"
                                        style="padding: 8px 12px; white-space: nowrap;  min-width: 120px;">Bekijk
                                        projecten</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="width:;">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png" class=""
                            alt="Image 2">
                        <!-- Overlay Text and Button -->
                        <div class="slider-text-button-container d-flex d-lg-none">
                            <div class="text">Tuinonderhoud in Ede</div>
                            <div
                                class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                <div class="line-before"></div>
                                <div class="circle-border">
                                    <a class="btn btn-secondary" href="/contact" style="padding: 4px 5px;">Bekijk
                                        projecten</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="width:;">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png" class=""
                            alt="Image 2">

                        <!-- Overlay Text and Button -->
                        <div class="slider-text-button-container d-flex d-lg-none">
                            <div class="text">Tuin bij Tiny House</div>
                            <div
                                class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                <div class="line-before"></div>
                                <div class="circle-border">
                                    <a class="btn btn-secondary" href="/contact" style="padding: 4px 5px;">Bekijk
                                        projecten</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>










        <!--Contact Opnemen Section  -->
        <div class="bg-leaf">
            <div class="container mt-50 d-none d-lg-block">
                <div class="bottom-text">
                    <div class="row">
                        <div class="col-lg-6  position-relative fadeIn visible" data-side="left">
                            <div class="grid-bottom">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/bus.png"
                                    class="w-100 h-100 object-fit-cover rounded" alt="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                    class="w-100 h-100 object-fit-cover rounded" alt="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/bg.png"
                                    class="w-100 h-100 object-fit-cover rounded" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 fadeIn visible" data-side="right">
                            <h2>Enthousiast?<br> Laat het ons weten</h2>
                            <div class="col-lg-9">
                                <div class="text">
                                    <p><span style="font-weight: 400;">Ook een uniek tuinontwerp? Of op zoek naar de
                                            hovenier voor jouw klus? Ga vrijblijvend in gesprek met GROENtuinen!</span>
                                    </p>
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




    </div>


    </div>



    <!-- Contact Information Section on Sm Screen -->
    <style>
    .dienst-line {
        height: 1px;
        width: 5595px;
        /* background-color: #ffffff; */
        border: 1px solid #ffffff;
        color: #ffffff;
        position: relative;
        opacity: 0.3;
    }

    @media (min-width: 768px) {
        .dienstline {
            height: 1px;
            width: 928px;
            background-color: #ffffff;
            color: #ffffff;
            position: relative;
            opacity: 0.5;
        }
    }
    </style>

    <div>

        <div style="background-color:; margin-top:120px; gap-20px; padding:20px; "
            class="row  flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none">
            <div class="line-top"></div>


            <div class="col-12 col-lg-4  text-left" style="margin-top:20px; margin-left:12px; ">
                <h2 style="font-size:36px;
                padding-bottom: 39px; 
                color: #fff;
                line-height: 55px;">
                    Enthousiast?<br>Laat het ons weten
                </h2>

                <div class="col-lg-9">
                    <div class="">
                        <p><span style="font-weight: 400; ;">Ook zo’n groene tuin? Laat dat maar aan
                                GROENtuinen
                                over! Neem vrijblijvend contact op om de mogelijkheden te bespreken.</span></p>
                    </div>
                </div>
            </div>
            <div class="button-group col-12 col-lg-4  d-flex flex-row  justify-content-start  "
                style="margin-bottom:70px">
                <div class="title d-flex flex-row d-md-flex d-lg-none align-items-center justify-content-start gap-1">
                    <div class="circle-border">
                        <a class="btn btn-primary " href="/contact" style="padding: 10px 40px; font-size:;">Neem
                            contact
                            op
                        </a>
                    </div>
                    <!-- <div class=" d-flex  d-md-flex  d-lg-flex " style=" height: 1px;
                      width: 66vw;
                       background-color: #ffffff;
                    color: #ffffff;
                     position: relative;">
                    </div> -->

                    <div class="dienst-line d-flex  d-md-none  d-lg-none "></div>
                    <div class="dienstline d-none  d-md-flex  d-lg-none "></div>

                </div>

            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                    class="groentuinen" style="width:120px; height:120px;  object-fit: cover;" />
            </div>
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
            // type: "fraction",
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
</main>
<?php get_footer() ?>