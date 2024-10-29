<?php get_header() //Template Name: diensten ?>


<main class="flex-grow-1">
    <style>
    .container-text {
        font-size: 17px;
    }

    .gardening-icon,
    .growth-icon,
    .design-icon,
    .tools-icon {
        width: 46px;
        height: 46px;
    }


    /* MD Screen */
    @media (min-width: 768px) {
        .swiper {
            width: 781px;
            height: 529px;
            margin: 20px auto;
        }
    }

    .dienst-line {
        height: 1px;
        width: 522px;
        background-color: #ffffff;
        color: #ffffff;
        position: relative;
        opacity: 0.5;
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


    .bg-img {
        position: relative;
        text-align: center;
        color: #F8F4EA;
        /* font-family: 'Henderson Sans'; */
        font-weight: bold;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: auto;
        margin-bottom: 0;
        background-size: cover;
    }

    .bg-img img {
        width: 100%;
        height: 34vh;

    }




    .content {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        /* bottom: 11%; */
    }

    /* .content h1 {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;

    } */

    .bottom-center {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;

    }



    h1 {

        margin-bottom: 180px;
        font-size: 40px;
        line-height: 70px;
        font-weight: bold;
    }





    .down {
        display: inline-block;
        transition: transform 0.3s ease;
        width: 45px;
        cursor: pointer;
    }

    .first-container {
        border: 1px solid #fff;
        border-radius: 10px;
        height: 461px;

    }

    .second-container {
        background-color: #5B7D6C;
        margin: 10px 10px;
        border-radius: 10px;

        height: 437px;
    }

    .border-bottom {

        border-bottom-width: 1px;
        /* margin-bottom: 22px; */

    }

    .swiper-container {
        position: relative;

    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;

    }

    .swiper-container .swiper-button-next {
        bottom: -50px !important;

    }

    .swiper-container .swiper-button-prev {
        bottom: -50px !important;

    }

    .swiper-container .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
    }


    /* LG Screen */
    @media (min-width: 992px) {


        .container-text {
            font-size: 24px;

        }

        .gardening-icon,
        .growth-icon,
        .design-icon,
        .tools-icon {
            width: 52px;
            height: 52px;

        }

        .swiper {
            width: 1781px;
            height: 529px;
            margin: 20px auto;
        }



        .content {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            bottom: 11%;
        }

        /* Hide arrow on large screens */
        .down {
            display: none;
        }




        .down {
            display: none;
        }

        h1 {

            margin-bottom: 0;
            font-size: 90px;
            line-height: 70px;
            font-weight: bold;

        }

        .bg-img img {

            /* height: 690px; */
            min-height: 50vh;

        }


        .content h1 {

            font-size: 90px;
            font-weight: 700;
            line-height: 125px;
        }

        .bottom-center {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            top: 100%;
            left: 73%;
            transform: translate(-50%, -50%);
        }
    }

    /* .swiper-container-fullwidth {
        width: 100vw;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    } */




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



    /* Hide the text and button container by default */
    .slider-text-button-container {
        display: none;
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
            /* width: 39%; */
            width: 21%;
            height: 1px;
            opacity: 0.3;
        }
    }

    /* 'md': '768px', */
    @media (min-width: 768px) {

        .line-before {
            border: 1px #fff solid;
            /* width: 100%; */
            width: 67%;
            height: 1px;
            opacity: 0.3;
        }

    }


    /* Text styling */
    .slider-text-button-container .text {
        flex: 1;
        /* Take up available space */
        text-align: left;

    }

    /* Button styling */
    .slider-text-button-container button {
        flex: 0;
        /* Do not grow */
        text-align: right;

    }
    </style>
    <div class="container">
        <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" style="font-size:18px;" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="" style="font-size:16px;">Onze
                diensten</span>
        </div>



        <div class="container bg-img mt-lg-auto mb-0">
            <div class="position-relative fadeIn">
                <div class=" overlay" style=" border-radius: 10px; "></div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="groentuinen"
                    style=" ;  object-fit: cover; border-radius: 10px; ;" />
                <div class="content center">
                    <div class="col-12 col-lg-7 bottom-center">

                        <h1>

                            <span class="d-lg-none d-block">
                                <span style="--i:1;">Onze</span> <br> <span style="--i:2;"></span> <span
                                    style="--i:3;">diensten</span> <br> <span style="--i:4;"></span>
                            </span>
                            <span class="d-none d-lg-block">
                                <span style="--i:1;">Onze </span> <span style="--i:2;"></span> <br> <span
                                    style="--i:3;">diensten</span> <span style="--i:4;"></span> <span
                                    style="--i:5;"></span>
                            </span>



                        </h1>
                    </div>
                    <div class="col-12 col-lg-7 bottom-center">
                        <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" />
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container" style="margin-top:-82px">

            <div class="  row" style="margin-top:120px;">
                <div class="col-12 col-lg-5 fadeIn" data-side="left">
                    <div class="first-container" id="content">

                        <div class="second-container d-flex flex-column gap-2" style="">

                            <div class=" d-flex flex-row align-items-center border-bottom fadeIn" style="padding:30px ">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/design.svg"
                                    alt="Design Icon" class="design-icon" style="width:42px; height: 42px;" />

                                <p class="flex-grow-1 container-text"
                                    style="; line-height:33px; margin:0; text-align: center; ">
                                    Tuinontwerp
                                </p>

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                    alt="downarrow Icon" class="downarrow-icon"
                                    style=" width:42px; height: 42px; margin-left:auto; rotate:270deg;" />


                            </div>





                            <div class=" d-flex flex-row align-items-center border-bottom fadeIn "
                                style="padding:30px ">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tools.svg"
                                    alt="Tools Icon" class="tools-icon" style="width:42px; height: 42px;" />


                                <p class="flex-grow-1 container-text"
                                    style="line-height:33px; margin:0; text-align: center; ">
                                    Tuinaanleg
                                </p>

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                    alt="downarrow Icon" class="downarrow-icon"
                                    style="width:42px; height: 42px; margin-left:auto; rotate:270deg;" />
                            </div>






                            <div class=" d-flex flex-row align-items-center border-bottom fadeIn   "
                                style=" padding:30px">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/gardening.svg"
                                    alt="Gardening Icon" class="gardening-icon" />


                                <p class="flex-grow-1 container-text" style="
                                    line-height:33px; 
                                    text-align: center;
                                            margin:0; ">
                                    Tuinonderhoud
                                </p>

                                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                    alt="downarrow Icon" class="downarrow-icon" style="width:42px; height: 42px;
                                         margin-left:auto; rotate:270deg;" />
                            </div>


                            <div>


                                <div class=" d-flex flex-row align-items-center fadeIn  " style="padding:30px ">

                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/growth.svg"
                                        alt="Growth Icon" class="growth-icon" />

                                    <p class="flex-grow-1 container-text" style=" line-height:33px; 
                                        margin:0; text-align: center; ">
                                        Advies</p>

                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                        alt="downarrow Icon" class="downarrow-icon"
                                        style="width:42px; height: 42px; margin-left:auto; rotate:270deg;" />
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-lg-5 pt-lg-5 pt-0 fadeIn" data-side="right">

                    <div class="" style=" ">
                        <h2 style="text-align:left;letter-spacing:2px;font-size:20px;line-height:33px;"> <span
                                class="d-block d-lg-none py-4 pt-5 pt-lg-0">
                                <span style="--i:1;">Onze </span> <span style="--i:2;"> diensten</span> <br>
                            </span>
                        </h2>
                        <p>

                            <span style="font-size:16px; line-height:0px; margin:0; text-align:left;  letter-spacing:1px;  
                                   font-weight: 400; ">
                                Bij GROENtuinen kun je terecht voor een écht groene tuin. We maken een tuinontwerp op
                                basis
                                van
                                jouw
                                wensen. En vervolgens nemen wij de complete tuinaanleg op ons. Van grondwerk en
                                bestrating
                                tot
                                het
                                plaatsen van schuttingen. En van veranda’s en buitenkeukens tot beplanting. Zo zijn wij
                                de
                                allround
                                hovenier voor jouw tuin.
                            </span>
                        </p>

                        <p>&nbsp;</p>

                        <span style="font-size:16px; line-height:0px; margin:0; text-align:left;  letter-spacing:1px;  
                                   font-weight: 400; ">

                            Voor onderhoud van tuinen richten wij ons onder andere op renovatie van de tuin,
                            voorjaarsbeurten,
                            zomersnoei, najaarsbeurt en bemesting. En wil je graag dat een tuinexpert meedenkt over
                            jouw
                            tuin?
                            Krijg advies op maat over planten, ligging en verzorging van je tuin.
                        </span>

                        </p>

                        <div class=" circle-border">
                            <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Samen aan de
                                slag</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>




        <!-- Full-Width Swiper Slider -->
        <div class="swiper-container swiper-container-fullwidth"
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
            <div class="mt-50 mb-50 fadeIn container">
                <hr class="hr-text gradient" data-content="Projecten">
            </div>

            <!-- Swiper Slider -->
            <div class="swiper-container" style="--swiper-pagination-color: #fff">
                <div id="#swiperRef" class="swiper mySwiper projecten-slider fadeIn"
                    style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="ratio ratio-1x1 h-100">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" class=""
                                    alt="Image 2">
                            </div>

                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>


                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text" style=" white-space: nowrap;">Tuin in Voorthuizen</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center ">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/contact"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="ratio ratio-1x1 h-100">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" class=""
                                    alt="Image 2">
                            </div>
                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>
                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text">Tuin onderhoud in Ede</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/contact"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="ratio ratio-1x1 h-100">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" class=""
                                    alt="Image 2">

                            </div>
                            <!-- Overlay Img -->
                            <div class="overlay d-block d-md-block d-lg-none" style="border-radius: 12px;"></div>
                            <div class="slider-text-button-container d-flex d-lg-none">
                                <div class="text">Tuin bij Tiny House</div>
                                <div
                                    class="slider-text-button-container-right d-flex align-items-center justify-content-center">
                                    <div class="line-before"></div>
                                    <div class="circle-border">
                                        <a class="btn btn-secondary" href="/contact"
                                            style="padding: 4px 31px;  white-space: nowrap;">Bekijk
                                            projecten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <div class="swiper-pagination d-block d-lg-none"></div>


            </div>

        </div>





        <!--Contact Opnemen Section  -->
        <div class="bg-leaf">
            <div class="container d-none d-lg-block" style="margin-top:60px;">
                <div class="bottom-text">
                    <div class="row">
                        <div class="col-lg-6  position-relative fadeIn" data-side="left">
                            <div class="grid-bottom">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                    alt="Groenoverons" class="object-fit-cover rounded" style="height:500px;" />

                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/40scaled.jpg" alt="">
                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/43scaled.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 fadeIn " data-side="right">
                            <h2 style="line-height:62px;">
                                <span style="font-weight:100; font-size:40px;  letter-spacing:4px; 
                                    font-family: 'Henderson Sans Basic', sans-serif;">
                                    Samen aan de slag?
                                </span><br>
                                <span style="font-weight:100; font-size:40px; 
                                 letter-spacing:4px; font-family: 'Henderson Sans Basic', sans-serif; ">Neem
                                    contact op!</span>
                            </h2>
                            <div class="col-lg-9">
                                <div class="text">
                                    <p><span style="font-weight: 400; line-height: 30px;letter-spacing: 1px;">Ook zo’n
                                            groene tuin? Laat dat maar aan
                                            GROENtuinen
                                            over! Neem vrijblijvend contact op om de mogelijkheden te bespreken.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                                <div class="circle-border" style="left: calc(var(--bs-gutter-x)* -0.3);">
                                    <a class="btn btn-primary " href="/contact" style="padding: 10px 20px; ">Neem
                                        contact
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
                class="row fadeIn flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none">
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
                <div class="button-group col-12 col-lg-4  d-flex flex-row  justify-content-start"
                    style="margin-bottom:70px">
                    <div
                        class="title d-flex  flex-row d-md-flex d-lg-none align-items-center justify-content-start gap-1">
                        <div class="circle-border">
                            <a class="btn btn-primary " href="/contact" style="padding: 10px 40px; font-size:;">Neem
                                contact
                                op
                            </a>
                        </div>
                        <div class="dienst-line d-flex  d-md-none  d-lg-none "></div>
                        <div class="dienstline d-none  d-md-flex  d-lg-none "></div>
                        <!-- line-contact between -->

                    </div>

                </div>

                <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                    style="margin-bottom:-50px">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:120px; height:120px;  object-fit: cover;" />
                </div>
            </div>
        </div>




    </div>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

    <script>
    document.querySelectorAll(".swiper-container").forEach(container => {

        console.log(container);
        var swiper = new Swiper(container.querySelector(".mySwiper"), {


                slidesPerView: 1.2,
                centeredSlides: true,
                loop: true,
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