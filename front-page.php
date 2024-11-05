<?php get_header()  //Template Name: frontpage  ?>


<div class="bg-container">

    <style>
        .bg-leaf {
            background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
            background-size: cover;
            background-repeat: no-repeat;
            /* background-size: 1200px; */
            background-size: 1104px;
            /* background-size: 1090px; */

        }

        .swiper-container {
            position: relative;

        }

        .swiper-container .swiper-pagination {
            /* pointer-events: none; */
            bottom: -50px !important;


        }

        .swiper-container .swiper-pagination-bullet {
            width: 15px;
            height: 15px;
        }



        /*  */

        .swiper-container {
            position: relative;

        }

        .swiper-container .swiper-pagination,
        .swiper-button-next,
        .swiper-button-prev {
            bottom: -70px !important;
            display: block;
        }

        .swiper-container .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 113% !important;

        }

        /* Set font size for swiper buttons */
        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after,
        .swiper-button-next::after,
        .swiper-rtl .swiper-button-prev::after {
            font-size: 16px;
            font-weight: 900;
        }

        .swiper-button-prev,
        .swiper-button-next {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            border: 1px solid #fff;
            border-radius: 25px;
            --swiper-navigation-color: #ffffff;
            z-index: 10;
            cursor: pointer;
        }

        .left-line {
            border: 1px solid #fff;
            width: 5%;
            opacity: 0.5;
            left: 41%;
            position: absolute;
            display: flex;
            top: 113%;
            align-items: center;
            justify-content: center;


        }

        .right-line {
            border: 1px solid #fff;
            width: 5%;
            opacity: 0.5;
            left: 54%;
            position: absolute;
            display: flex;
            top: 113%;
            align-items: center;
            justify-content: center;
        }




        .swiper-container .swiper-pagination-bullet,
        {
        width: 15px;
        height: 15px;

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
            <div class="hero-content Position-relative">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <h1 class="fadeIn " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("titel") ?>
                            <!-- <span style="--i:1;">Tuinen</span> <br> <span style="--i:2;">precies</span> <span
                                style="--i:3;">zoals</span> <br> <span style="--i:4;">geplant</span> -->
                        </span>

                    </h1>
                </div>
                <!-- Line for Small Screen -->
                <div class="line height d-flex d-md-none d-lg-none" style="--height:80px"></div>
                <div class="vl2 d-none  d-lg-none d-md-flex" style="border-left: 1px solid white;
                height: 73px;
                position: absolute;
                  left: 50%;
               margin-left: -3px;
                top: 143px;
               display: flex;
                 opacity: 57.5;">
                </div>

                <!-- On Small Screen -->
                <div class="fadeIn container d-block d-md-none d-lg-none">
                    <div class="button-line-container " style="  display: flex;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    margin-top: 139px;
                    margin-bottom: 70px;">
                        <div class="button-group ">
                            <div class="circle-border ">
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style=" white-space: nowrap;">Tuin op maat</a>
                            </div>
                            <div class="circle-border">
                                <a href="<?= esc_url(home_url('/projecten')); ?>"
                                    class="btn btn-secondary">Projecten</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- On Md Screen -->
                <div class="fadeIn container d-none d-md-flex  align-items-center justify-content-center d-lg-none">
                    <div class="button-line-container">
                        <div class="button-group ">
                            <div class="circle-border ">
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style=" white-space: nowrap;">Tuin op maat</a>
                            </div>
                            <div class="circle-border">
                                <a href="<?= esc_url(home_url('/projecten')); ?>"
                                    class="btn btn-secondary">Projecten</a>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    @media (min-width: 768px) {

                        .button-group {
                            flex-direction: column;
                            justify-content: center;
                        }

                        .button-line-container {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            margin-top: 97px;

                        }
                    }
                </style>


                <!-- On Lg Screen -->
                <div class="fadeIn container d-none d-md-none d-lg-block">
                    <div class="button-line-container">


                        <div class="button-group ">

                            <div class="circle-border " style="left: calc(var(--bs-gutter-x)* -1.0);">
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style=" white-space: nowrap;">Tuin op maat</a>
                            </div>
                            <div class="circle-border" style="left: calc(var(--bs-gutter-x)* -0.5);">
                                <a href="<?= esc_url(home_url('/projecten')); ?>"
                                    class="btn btn-secondary">Projecten</a>
                            </div>
                        </div>
                        <div>
                            <a href="https://www.instagram.com" target="_blank" class="instagram-container"
                                style="left: calc(var(--bs-gutter-x)* 37);">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="line-container flex-grow-1">
                            <div class="line-hero flex-grow-1"></div>
                            <!-- <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                                <i class="fab fa-instagram"></i>
                            </a> -->
                        </div>
                    </div>

                </div>

                <style>
                    @media (min-width: 1024px) {

                        .button-group {
                            flex-direction: row;
                            justify-content: flex-start;
                        }

                        .button-line-container {
                            display: flex;
                            align-items: left;
                            justify-content: flex-start;
                            margin-top: 70px;
                            margin-bottom: 70px;
                        }


                        .line-hero {
                            height: 1px;
                            background-color: #ffffff;
                            color: #ffffff;
                            position: relative;
                            display: block;
                            opacity: 0.5;
                            margin-left: -41px;
                        }

                    }
                </style>


                <!-- Downarrow on SM Screen And Lg Screen -->
                <div class="d-block  d-md-none d-lg-block">
                    <a class="downarrow" aria-label="Go to the content" href="#Maaktuin">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                            alt="downarrow Icon" class="downarrow-icon" />
                    </a>
                </div>


                <!-- Downarrow on Md Screen -->
                <div class="d-none d-md-block d-lg-none">
                    <a class="downarrow" aria-label="Go to the content" href="#Maaktuin" style=" bottom: -238px;
                           left: 50%;
                          rotate: -360deg;
                           transform: translateY(-50%) translateX(-50%);">
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
                    <div class="col-lg-4 text-section  fadeIn" style="margin-top:8px;" data-side="left">
                        <!-- <h1 style="font-size: 40px;
                         font-family: Henderson-sans-basic, sans-serif;">
                            Maak van jouw tuin een bijzondere plek om te zijn.</h1> -->
                        <h1>
                            <?= get_field("right_title") ?>
                        </h1>

                        <!-- <p style="font-size: 19px;
                         opacity: 1;
                        letter-spacing: 0px;
                         margin-top: 50px;
                        line-height: 2;
                         font-family: Inclusive Sans, sans-serif; ">
                            Met een tuin van GROENTuin maak je jouw tuin uniek. Speciaal
                            ontworpen,aangelegd en onderhouden voor jou.</p> -->
                        <div style="font-size: 19px;
                         opacity: 1;
                        letter-spacing: 0px;
                         margin-top: 50px;
                         margin-bottom:33px;
                        line-height: 2;">
                            <?= get_field("right-text") ?>
                        </div>
                        <div class="circle-border" style="left: calc(var(--bs-gutter-x)* -0.3);">
                            <!-- <a href="<?= esc_url(home_url('/over-ons')); ?>" class="btn btn-secondary">Over ons</a> -->
                            <a href="<?= get_field("overons_btn")['url'] ?>" class="btn btn-secondary"
                                style=" white-space: nowrap;"><?= get_field("overons_btn")['title'] ?></a>
                        </div>
                    </div>




                    <!-- Swiper On Small Screen   -->
                    <div class="swiper-container fadeIn  order-2 projecten-slider d-flex d-lg-none"
                        style="--swiper-pagination-color: #fff">

                        <div class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                            style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: ">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                            class=" " alt="Image 1">
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                            class=" " alt="Image 2">
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png"
                                            class=" " alt="Image 3">
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                            class="" alt="Image 4">
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png"
                                            class=" " alt="Image 5">
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="swiper-pagination" style="bottom:-50px !important"></div>

                    </div>







                    <!-- Right  side: Images on Bige Screen  -->
                    <div class="container col-lg-8 images-section2 ">
                        <div class="row2  fadeIn" data-side="right">
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

                    <!-- Small Screen -->
                    <div class="col-lg-2 text-center  d-lg-none order-1">
                        <div class="horizontal-divider"></div>
                    </div>
                    <div class="col-lg-5 text-left d-block  d-lg-none order-2">
                        <!-- <p style="font-size:36px; line-height:2;">Waarom GroenTuinen?</p> -->
                        <?= get_field("warrom_text") ?>
                    </div>

                    <!-- Lg Screen Warrom_text -->

                    <div class="title d-none d-lg-flex align-items-center gap-1">
                        <!-- <h2 class="mb-0">Waarom GROENtuinen?</h2> -->
                        <h2 style="margin-left:-9px;">
                            <?= get_field("warrom_text") ?>
                        </h2>
                        <div class="line between d-none d-lg-block flex-grow-1"></div>
                        <div class="circle-border">
                            <a class="btn btn-primary d-none d-md-none d-lg-block" href="/contact">Kennismaken? </a>

                        </div>
                    </div>


                    <!-- Testimonials Section on All Screens -->
                    <div class="row  text-center2 order-3  fadeIn" style="margin-top: 100px;">
                        <?php
                        foreach (get_field("testimonials_section") as $testimonial) {
                            ?>
                            <div class="col-12 col-lg-4 testimonial">
                                <img src="<?= $testimonial['afbeelding']['url'] ?>"
                                    alt="<?= $testimonial['afbeelding']['alt'] ?>" class="testimonial-img" />

                                <h1>
                                    <?= $testimonial["testimonials_section_title_text"] ?>
                                </h1>

                                <p>
                                    <?= $testimonial["testimonials_section_text"] ?>
                                </p>

                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <!-- Right: Button (Will be under testimonials on small screens) -->
                    <div class="col-lg-5 text-right d-sm-block d-lg-none">
                        <div class="circle-border">
                            <a href="<?= get_field("contact_btn")['url'] ?>" class="btn btn-primary"
                                style=" white-space: nowrap;"><?= get_field("contact_btn")['title'] ?>?</a>
                        </div>

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
                    transform: translate(50%, 50%);
                    right: 0;
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
                    bottom: -55px;
                    right: 0px;
                    width: 100%;
                    /* Add padding from edges */
                    padding: 0 20px;
                    box-sizing: border-box;
                    z-index: 1000;


                }

                .line-before {
                    border: 1px #fff solid;
                    width: 21%;
                    height: 1px;
                    opacity: 0.3;
                }
            }

            /* 'md': '768px', */
            @media (min-width: 768px) {

                .line-before {
                    border: 1px #fff solid;
                    width: 67%;
                    height: 1px;
                    opacity: 0.3;
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
        <div class="swiper-container-fullwidth  "
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
            <div class="container mt-50 mb-50 d-none d-md-none d-lg-block fadeIn">
                <hr class="hr-text gradient" data-content="Projecten">
            </div>
            <div class=" mt-50 mb-50 d-block d-md-block d-lg-none fadeIn">
                <hr class="hr-text gradient" data-content="Projecten" style="margin: 30px -75px;">
            </div>




            <!-- Swiper Slider -->
            <div class="swiper-container" style="--swiper-pagination-color: #fff">

                <div id="#swiperRef" class="swiper fadeIn mySwiper projecten-slider"
                    style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="width:;">
                            <div class="ratio ratio-1x1 h-100">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" class=""
                                    alt="Image 2">
                            </div>
                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>
                            <!-- Overlay Text and Button -->
                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text" style=" white-space: nowrap;">Tuin in Voorthuizen</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center ">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/projecten"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width:;">
                            <div class="ratio ratio-1x1 h-100">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" class=""
                                    alt="Image 2">
                            </div>
                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>
                            <!-- Overlay Text and Button -->
                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text">Tuinonderhoud in Ede</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/projecten"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width:;">
                            <div class="ratio ratio-1x1 h-100">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" class=""
                                    alt="Image 2">
                            </div>
                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>
                            <!-- Overlay Text and Button -->
                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text">Tuin bij Tiny House</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/projecten"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <div class=" flex  flex-lg-row align-items-center justify-content-center">

                    <div class="swiper-button-prev d-none d-lg-flex" style="left:36%"></div>
                    <div class="left-line d-none d-lg-block"></div>
                    <div class="swiper-pagination d-block d-lg-block"></div>
                    <div class="right-line d-none d-lg-block"></div>
                    <div class="swiper-button-next d-none d-lg-flex" style="left:61%"></div>
                </div>

                <!-- <div class="swiper-pagination "></div> -->


            </div>
        </div>










        <!--Contact Opnemen Section  -->
        <div style="margin-top:150px">
            <div class="bg-leaf">
                <div class="container mt-50 d-none d-lg-block">
                    <div class="bottom-text">
                        <div class="row">
                            <div class="col-lg-6  position-relative fadeIn " data-side="left">
                                <div class="grid-bottom" style="left: calc(var(--bs-gutter-x)* 0.1);">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/bus.png"
                                        class="w-100 h-100 object-fit-cover rounded" alt="">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                        class="w-100 h-100 object-fit-cover rounded" alt="">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/bg.png"
                                        class="w-100 h-100 object-fit-cover rounded" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 fadeIn" data-side="right">
                                <!-- <h2>Enthousiast?<br> Laat het ons weten</h2> -->
                                <h2>
                                    <?= get_field("contact_title") ?>
                                </h2>
                                <div class="col-lg-9">
                                    <div class="text">
                                        <!-- <p><span style="font-weight: 400;">Ook een uniek tuinontwerp? Of op zoek naar de
                                                hovenier voor jouw klus? Ga vrijblijvend in gesprek met
                                                GROENtuinen!</span>
                                        </p> -->
                                        <P style="margin-top:50px;">
                                            <?= get_field("contact_text") ?>
                                        </P>
                                    </div>
                                </div>
                                <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                                    <div class="circle-border" style="left: calc(var(--bs-gutter-x)* -0.4);">

                                        <!-- <a class="btn btn-primary " href="/contact">Neem contact op </a> -->
                                        <a href="<?= get_field("neemcontact_btn")['url'] ?>" class="btn btn-primary"
                                            style=" white-space: nowrap;"><?= get_field("neemcontact_btn")['title'] ?></a>
                                    </div>
                                    <div class="line-contact between d-flex  d-md-flex  d-lg-flex flex-grow-1 "></div>

                                </div>

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
            class="row  flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none fadeIn" data-side="right">
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
            slidesPerView: 1.2,
            centeredSlides: true,
            spaceBetween: 5,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

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
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>


    <!-- Initialize Swiper-container -->
    <script>
        document.querySelectorAll(".swiper-container").forEach(container => {
            var swiper = new Swiper(container.querySelector(".mySwiper"), {
                slidesPerView: 1.2,
                centeredSlides: true,
                // loop: true,
                grabCursor: true,
                spaceBetween: 5,
                pagination: {
                    el: container.querySelector(".swiper-pagination"),
                    clickable: true

                }

                ,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }

                ,
                breakpoints: {
                    992: {

                        slidesPerView: 3.5,
                    }
                }
            }

            );
        })


        var appendNumber = 4;
        var prependNumber = 1;

        document.querySelector(".prepend-2-slides").addEventListener(
            "click",
            function (e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --
                    prependNumber +
                    "</div>",
                    '<div class="swiper-slide">Slide ' + --
                    prependNumber + "</div>",
                ]);
            }

        );

        document.querySelector(".prepend-slide").addEventListener(
            "click",
            function (e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --
                    prependNumber +
                    "</div>");
            }

        );

        document.querySelector(".append-slide").addEventListener(
            "click",
            function (e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++
                    appendNumber + "</div>");
            }

        );

        document.querySelector(".append-2-slides").addEventListener(
            "click",
            function (e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++
                    appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++
                    appendNumber + "</div>",
                ]);
            }

        );
    </script>





</main>
<?php get_footer() ?>