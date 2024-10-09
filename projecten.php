<?php get_header();
//Template Name: projecten ?>

<main class="flex-grow-1">
    <style>
    .swiper-container {
        position: relative;

    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;

    }

    .swiper-container .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
    }

    /* Circle Style */

    /* Hide the CircleType by default */
    #demo3 {
        display: none;
    }

    #demo2 {
        display: none;
    }

    #demo1 {
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
            bottom: -55px;
            /* bottom: -50px; */
            transform: translate(50%, 50%);
            /* position: fixed; */
            right: -70px;

            /* Position it at the right edge */
            transform: translateY(-50%);
            color: #fff;
            border-radius: 50%;
            font-size: 12px;
            letter-spacing: 3px;
            z-index: 1000;

        }

        #demo2 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
            width: 200px;
            overflow: hidden;
            position: absolute;
            bottom: -255px;

            transform: translate(50%, 50%);
            /* position: fixed; */
            right: -70px;

            /* Position it at the right edge */
            transform: translateY(-50%);
            color: #fff;
            border-radius: 50%;
            font-size: 12px;
            letter-spacing: 3px;
            z-index: 1000;

        }

        #demo1 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
            width: 200px;
            overflow: hidden;
            position: absolute;
            bottom: -65px;

            transform: translate(50%, 50%);
            /* position: fixed; */
            /* Position it at the right edge */
            right: -97px;
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

    #demo2 span {
        position: absolute;
        left: 50%;
        transform-origin: 0 100px;

    }

    #demo1 span {
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
        height: 280px;
        width: 280px;
        overflow: visible;

    }



    /*  */

    .line-top {

        border: 1px solid #ffffff;
        height: 1px;
        width: 100%;
        opacity: 0.3;
    }

    .vlsm {
        margin: 20px;
        border-left: 1px solid white;
        height: 80px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 250px;
    }

    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        /* background-size: 1600px; */
    }

    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .grid-item {
        display: flex;
        justify-content: center;
    }

    .grid-item:nth-child(2) {
        grid-row: span 2;
        /* Spans second image across 2 rows */
    }


    .lin3 {
        border: 1px solid #ffffff;
        height: 1px;
        width: 100%;
        margin-top: 50px;
        opacity: 0.3;
    }

    .text-header {
        color: #F8F4EA;
        font-size: 60px;
    }


    @media (min-width: 992px) {
        .text-header {

            font-size: 120px;
            margin-bottom: 120px;
        }

        .nline {
            border: 1px solid #ffffff;
            opacity: 0.3;
            width: 50%;
            height: 1px;
        }
    }

    .ratio-custom {

        --bs-aspect-ratio: calc(var(--y) / var(--x)* 100%);
    }

    .grid-7,
    .grid-7 {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: 1fr;
        grid-gap: 0;
    }

    .grid-7>:first-child,
    .grid-7>:first-child {
        grid-area: 1 / 1 / 2 / 5;
    }

    .grid-7>:nth-child(2),
    .grid-7>:nth-child(2) {
        grid-area: 1 / 5 / 2 / 8;
    }

    .grid-item img {
        object-fit: cover;
        width: 100%;
    }

    .overlay1 {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-circle:hover .overlay1 {
        opacity: 0.5;
    }

    .circle-text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    </style>
    <div>
        <div class="container  ">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Projecten</span>
            </div>






            <!-- First Container -->
            <div class="container d-lg-grid d-none  " style="margin-top: 140px">
                <div class="row ">

                    <div class="col-12 col-lg-5 mb-4 ">
                        <div class="text-header ">Projecten</div>
                        <div class="text d-lg-flex flex-row  align-items-center">
                            <div class="circle-border">
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style="padding-left: 40px;padding-right: 40px; font-size:18px;">Tuin op maat</a>
                            </div>
                            <div class="nline"></div>
                        </div>



                        <div class="grid-item " style="grid-row: span 2;  margin-top:140px; ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                                class="object-fit-cover rounded" style="height:400px;" />

                        </div>
                        <div class="grid-item mt-4" style="grid-row: span 2;  ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled13"
                                class="object-fit-cover rounded" style="height:900px;" />

                        </div>
                    </div>

                    <div class="col-12 col-lg-7 mb-4 text-center.grid-7 ">
                        <div style="position: relative;">

                            <!-- Circle On The Right Side Of Projecten Slider -->
                            <a href="/projecten" id="demo3" class="circle text-circle">
                                <div style="position: relative; height: 200px;">
                                    <?php
                                    $text = '- Tuinonderhoud in Ede -- Tuinonderhoud in Ede -- Tuinonderhoud in Ede -';
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
                            <div class=" img-wrap">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                            </div>
                        </div>
                        <!-- <div class="img-wrap">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                                alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                        </div> -->
                        <div class="grid-7 mt-4">
                            <div class="row me-0">
                                <div class="col-12">
                                    <div style="position: relative;">


                                        <!-- Circle On The Right Side Of Projecten Slider -->
                                        <a href="/projecten" id="demo1" class="circle text-circle">
                                            <div style="position: relative; height: 200px;">
                                                <?php
                                                $text = '- Tuin in Voorthuizen -- Tuin in Voorthuizen -- Tuin in Voorthuizen -';
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
                                        <div class="grid-item  ratio ratio-custom" style="--x:53;--y:67;">
                                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                                alt="scaled19" class="object-fit-cover rounded"
                                                style="height:; width:; margin-left:; " />
                                        </div>

                                    </div>

                                    <div class="grid-item  ratio ratio-custom mt-4" style="--x:53;--y:67;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                            alt="scaled19" class="object-fit-cover rounded"
                                            style="height:; width:; margin-left:; " />
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-0">
                                <div class="col-12">

                                    <div class="grid-item ratio ratio-custom" style="--x:39;--y:53;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg"
                                            alt="scaled5" class="object-fit-cover rounded"
                                            style="height:; width:; margin-left:;" />
                                    </div>
                                    <div class="container-circle" style="position: relative;">

                                        <!-- Circle On The Right Side Of Projecten Slider -->
                                        <a href="/projecten" id="demo2" class="circle text-circle">
                                            <div style="position: relative; height: 200px;">
                                                <?php
                                                $text = '- Tuin Bij Tiny House -- Tuin Bij Tiny House -- Tuin Bij Tiny House -';
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
                                        <div class="grid-item ratio ratio-custom  mt-4" style="--x:39;--y:53;">
                                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg"
                                                alt="scaled65" class="object-fit-cover rounded"
                                                style="height:620px; width:; margin-left:; display:block" />
                                            <div class="overlay1">

                                                <div class="circle-text">Tuin Bij Tiny House</div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New  3Lines -->

                    <!-- <div class="col-12 col-lg-4 mb-4  ">

                        <div class="row me-0">
                            <div class="col-12">
                                <div class="grid-item  ratio ratio-custom" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>
                                <div class="grid-item  ratio ratio-custom mt-4" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>

                            </div>

                        </div>
                    </div> -->
                    <!-- <div class="col-12 col-lg-4 mb-4  ">

                        <div class="row me-0">
                            <div class="col-12">
                                <div class="grid-item  ratio ratio-custom" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>
                                <div class="grid-item  ratio ratio-custom mt-4" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>

                            </div>

                        </div>
                    </div> -->

                    <!-- <div class="col-12 col-lg-4 mb-4  ">

                        <div class="row me-0">
                            <div class="col-12">
                                <div class="grid-item  ratio ratio-custom" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>
                                <div class="grid-item  ratio ratio-custom mt-4" style="--x:53;--y:67;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                        alt="scaled19" class="object-fit-cover rounded"
                                        style="height:; width:; margin-left:; " />
                                </div>

                            </div>

                        </div>
                    </div> -->



                </div>
                <div class="lin3"></div>

            </div>


        </div>




    </div>
    <div class="container d-flex d-lg-none  align-items-center">
        <div class="col-12 text-center">
            <div class="text-header ">Projecten</div>

            <div class="vlsm"></div>
            <div class="text" style="margin-top:120px;">
                <div class="circle-border">
                    <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                        style="padding-left: 40px;padding-right: 40px; font-size:18px;">Tuin op maat</a>
                </div>

            </div>
        </div>
    </div>


    <!-- The first swiper  -->
    <div class="container" style="margin-bottom:80px;">

        <!-- Swiper On Small Screen -->
        <div class="swiper-container" style="--swiper-pagination-color: #fff">
            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                            alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg" alt="scaled19"
                            class="object-fit-cover rounded" style=" " />
                    </div>

                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->

            </div>
            <div class="swiper-pagination d-lg-none "></div>
        </div>


    </div>




    <!-- The second swiper -->
    <div class="container" style="margin-bottom:80px;">

        <div class="swiper-container" style="--swiper-pagination-color: #fff">

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg" alt="scaled5"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled13"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled65"
                            class="object-fit-cover rounded" style="  " />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt="scaled51"
                            class="object-fit-cover rounded" style="" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div> -->
            </div>
            <div class="swiper-pagination d-lg-none"></div>

        </div>


    </div>


    <!-- The third swiper -->

    <div class="container" style="margin-bottom:80px;">


        <div class="swiper-container" style="--swiper-pagination-color: #fff">
            <div #swiperRef="" class=" swiper mySwiper smrow order-2 projecten-slider d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg" alt="scaled5"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled13"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled65"
                            class="object-fit-cover rounded" style="  " />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt="scaled51"
                            class="object-fit-cover rounded" style="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                            alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                            class="object-fit-cover rounded" style="" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div> -->
            </div>

            <div class="swiper-pagination d-lg-none"></div>

        </div>


    </div>



    <!--Contact Opnemen Section  -->
    <div class="bg-leaf">
        <div class="container d-none d-lg-block" style="margin-top:60px;">
            <div class="bottom-text">
                <div class="row">
                    <div class="col-lg-6  position-relative fadeIn visible" data-side="left">
                        <div class="grid-bottom">

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                alt="Groenoverons" class="object-fit-cover rounded" style="height:500px;" />

                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="<?= esc_url(get_template_directory_uri()); ?>/images/41scaled.jpg" alt="">
                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="<?= esc_url(get_template_directory_uri()); ?>/images/43scaled.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 fadeIn visible" data-side="right">
                        <h2>Enthousiast?<br> Neem contact op!</h2>
                        <div class="col-lg-9">
                            <div class="text">
                                <p><span style="font-weight: 400;">Ook zo’n groene tuin? Laat dat maar aan
                                        GROENtuinen
                                        over! Neem vrijblijvend contact op om de mogelijkheden te bespreken.</span>
                                </p>
                            </div>
                        </div>
                        <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                            <div class="circle-border">
                                <a class="btn btn-primary " href="/contact" style="padding: 10px 20px;">Neem contact
                                    op
                                </a>
                            </div>
                            <div class="line-contact between d-flex  d-md-flex  d-lg-flex "></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Contact Information Section on Sm Screen -->

    <div>

        <div style="background-color:; margin-top:40px; gap-20px; padding:20px; "
            class="row  flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none">
            <div class="line-top"></div>


            <div class="col-12 col-lg-4  text-left" style="margin-top:20px; ">
                <h2 style="font-size:36px;
                padding-bottom: 39px; 
                color: #fff;
                line-height: 55px;">
                    Enthousiast? Neem contact
                    op!
                </h2>
                <div class="col-lg-9">
                    <div class="">
                        <p><span style="font-weight: 400; ;">Ook zo’n groene tuin? Laat dat maar aan
                                GROENtuinen
                                over! Neem vrijblijvend contact op om de mogelijkheden te bespreken.</span></p>
                    </div>
                </div>
            </div>
            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column  justify-content-start  "
                style="margin-bottom:70px">
                <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                    <div class="circle-border">
                        <a class="btn btn-primary " href="/contact" style="padding: 10px 40px; font-size:;">Neem
                            contact
                            op
                        </a>
                    </div>
                    <div class="line-contact between d-flex  d-md-flex  d-lg-flex "></div>

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <!-- Initialize Swiper -->
    <script>
    // var swiper = new Swiper(".mySwiper", {



    //         slidesPerView: 1.2,
    //         centeredSlides: true,
    //         loop: true,
    //         grabCursor: true,
    //         spaceBetween: 5,
    //         pagination: {
    //             el: ".swiper-pagination",

    //         }

    //         ,
    //         navigation: {
    //             nextEl: ".swiper-button-next",
    //             prevEl: ".swiper-button-prev",
    //         }

    //         ,
    //         breakpoints: {
    //             992: {

    //                 slidesPerView: 3.5,
    //             }
    //         }
    //     }

    // );

    document.querySelectorAll(".swiper-container").forEach(container => {
        var swiper = new Swiper(container.querySelector(".mySwiper"), {
                slidesPerView: 1.2,
                centeredSlides: true,
                loop: true,
                grabCursor: true,
                spaceBetween: 5,
                pagination: {
                    el: container.querySelector(".swiper-pagination"),

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
        function(e) {
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
        function(e) {
            e.preventDefault();
            swiper.prependSlide(
                '<div class="swiper-slide">Slide ' + --
                prependNumber +
                "</div>");
        }

    );

    document.querySelector(".append-slide").addEventListener(
        "click",
        function(e) {
            e.preventDefault();
            swiper.appendSlide(
                '<div class="swiper-slide">Slide ' + ++
                appendNumber + "</div>");
        }

    );

    document.querySelector(".append-2-slides").addEventListener(
        "click",
        function(e) {
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