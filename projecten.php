<?php get_header();
//Template Name: projecten ?>

<main class="flex-grow-1">
    <style>
    /* Text styling */
    .text {
        text-align: left;
        font-size: 19px;
    }




    /*  */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        overflow: auto;
    }


    /* Modal Content (image) */
    .modal-content {
        position: fixed;
        margin: auto;
        padding: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(33, 46, 37, .7);
        animation: slideInFromTop 0.5s;
        /* padding-bottom: 55px;
        padding-top: 110px; */
        transition: all .5s ease;
    }



    /* Caption of Modal Image */
    #caption {

        display: flex;
        color: #ccc;
        padding: 192px 0;
        height: 24px;
        text-align: left;
        font-size: 79px;
    }

    #caption2 {

        display: flex;
        color: #ccc;
        padding: 192px 0;
        height: 24px;
        text-align: left;
        font-size: 79px;
    }




    @keyframes slideInFromTop {
        from {
            top: -700px;
            opacity: 0;
        }

        to {
            top: 0;
            opacity: 1;
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 195px;
        /* top: 15px; */
        right: 26px;
        color: #f1f1f1;
        font-size: 30px;
        font-weight: bold;
        transition: 0.3s;
        border: 1px solid white;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        text-align: center;

    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }





    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100vw;
        }


    }

    /* MD Screen */
    @media (min-width: 768px) {

        .text {
            text-align: left;
            font-size: 30px;
        }

        .swiper {
            width: 100%;
            height: 629px;
            margin: 20px auto;
        }
    }

    .dienst-line {
        height: 1px;
        width: 595px;
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



    .swiper-container {
        position: relative;

        /* position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); */

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
        .swiper {
            width: 2200px;
            height: 326px;
            top: -148px;

        }

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





    .line-top {
        border: 1px solid #ffffff;
        height: 1px;
        width: 100%;
        opacity: 0.3;
        margin-top: 135px;
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

    .middle1 {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 84%;
        left: 62%;
        width: 127%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);


    }

    .middle2 {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 70%;
        left: 32%;
        width: 100%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 95%;
        /* left: 30%; */
        left: 50%;
        width: 100%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }



    .container-circle:hover #demo1 {
        display: none;
    }

    .container-circle:hover #demo2 {
        display: none;
    }

    .container-circle:hover #demo3 {
        display: none;
    }

    .container-circle:hover .tiny-house {
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 1;
    }

    .container-circle:hover .middle {
        opacity: 1;
    }

    .container-circle:hover .middle1 {
        opacity: 1;
    }

    .container-circle:hover .middle2 {
        opacity: 1;
    }

    .circle-text2 {
        color: white;
        font-size: 18px;
        position: absolute;
        top: 50%;
        left: 37%;
        white-space: wrap;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: left;
        /* margin-left: 4px; */

    }


    .circle-text {
        color: white;
        font-size: 18px;
        position: absolute;
        top: 58%;
        left: 75%;
        width: 100%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: left;
        margin-left: 4px;
    }


    .circle-text1 {
        color: white;
        font-size: 18px;
        position: absolute;
        top: 77%;
        left: 50%;
        width: 100%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: left;
        /* margin-left: 20px; */
        margin-left: 10px;
    }
    </style>
    <div>
        <div class="container  ">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Projecten</span>
            </div>






            <!--------- First Container ------------>
            <div class="container d-lg-grid d-none  " style="margin-top: 140px">
                <div class="row ">

                    <div class="col-12 col-lg-5 mb-4 fadeIn ">
                        <div class="text-header ">Projecten</div>
                        <div class="text d-lg-flex flex-row  align-items-center">
                            <div class="circle-border">
                                <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                    style="padding-left: 40px;padding-right: 40px; font-size:18px;">Tuin op maat</a>
                            </div>
                            <div class="nline"></div>
                        </div>



                        <div class="grid-item fadeIn " style="grid-row: span 2;  margin-top:140px; ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                                class="object-fit-cover rounded" style="height:400px;" />

                        </div>
                        <div class="grid-item mt-4 fadeIn" style="grid-row: span 2;  ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled13"
                                class="object-fit-cover rounded" style="height:900px;" />

                        </div>
                    </div>

                    <div class="col-12 col-lg-7 mb-4 text-center.grid-7 fadeIn">
                        <div class="container-circle" style="position: relative;">

                            <!------------ Circle On The Right Side Of Projecten Slider ----------->
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
                            <div class=" img-wrap ">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                                    alt="Tuinonderhoud in Ede" class="img1 object-fit-cover rounded  "
                                    style="opacity:0.7;" id="myImg" />


                                <!--  -->


                                <div class="middle1">

                                    <div class="circle-text2">
                                        <h1>
                                            Tuinonderhoud in Ede
                                        </h1>

                                        <span>
                                            In Ede voert GROENtuinen regelmatig onderhoud uit aan deze tuin. Zo komt
                                            de
                                            tuin het beste z'n recht en bloeit aj he groen op hun mooist.
                                        </span><br>
                                        <span>

                                        </span>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="grid-7 mt-4">
                            <div class="row me-0 ">
                                <div class="col-12 ">
                                    <div class="container-circle" style="position: relative;">


                                        <!--------- Circle On The Right Side Of Projecten Slider ----------->
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
                                                alt="Tuin in Voorthuizen" class="object-fit-cover rounded"
                                                style="height:; width:; margin-left:; opacity:0.7;" id="myImg2" />


                                            <div class="middle2">

                                                <div class="circle-text">
                                                    <h1>
                                                        Tuin in Voorthuizen
                                                    </h1>

                                                    <span>
                                                        GROENtuinen heeft in Voorthuizen

                                                    </span><br>
                                                    <span> een botanische tuin ontworpen</span><br>
                                                    <span> en gerealiseerd.</span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="grid-item  ratio ratio-custom mt-4 " style="--x:53;--y:67;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                            alt="scaled19" class="object-fit-cover rounded"
                                            style="height:; width:; margin-left:; " />
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-0 fadeIn">
                                <div class="col-12 ">

                                    <div class="grid-item ratio ratio-custom " style="--x:39;--y:53;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg"
                                            alt="scaled5" class="object-fit-cover rounded"
                                            style="height:; width:; margin-left:;" />
                                    </div>


                                    <div class="container-circle " style="position: relative;">

                                        <!------- Circle On The Right Side Of Projecten Slider ----------->
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
                                                alt="Tuin Bij Tiny House" class="tiny-house object-fit-cover rounded"
                                                style="height:620px; width:; margin-left:; display:block; opacity:0.7;"
                                                id="myImg3" />
                                            <div class="middle">

                                                <div class="circle-text1">
                                                    <h1>
                                                        Tuin Bij Tiny House
                                                    </h1>

                                                    <span>
                                                        GROENtuinen heeft de
                                                    </span><br>
                                                    <span>
                                                        aanleg van deze prachtige
                                                    </span><br>
                                                    <span>
                                                        botanische tuin

                                                    </span><br>
                                                    <span> in Barneveld verzorgd.</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lin3"></div>

            </div>


        </div>




    </div>
    <div class="container d-flex d-lg-none  align-items-center ">
        <div class="col-12 text-center">
            <div class="text-header fadeIn ">Projecten</div>

            <div class="vlsm fadeIn"></div>
            <div class="text fadeIn" style="margin-top:120px;">
                <div class="circle-border">
                    <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                        style="padding-left: 40px;padding-right: 40px; font-size:18px;">Tuin op maat</a>
                </div>

            </div>
        </div>
    </div>


    <!------------ The first swiper ---------- -->
    <div class="container fadeIn" style="margin-bottom:80px;">

        <!------------ Swiper On Small Screen ----------->
        <div class="swiper-container" style="--swiper-pagination-color: #fff">
            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                <div class="d-block d-md-none" style="position: absolute; z-index:4; bottom:-22px; padding:61px;">
                    <div class="text">Tuinonderhoud in Ede</div>
                </div>
                <div class="d-none d-md-block" style="position: absolute; z-index:4; bottom:-22px; padding:82px;">
                    <div class="text">Tuinonderhoud in Ede</div>
                </div>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                            alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg" alt="scaled19"
                            class="object-fit-cover rounded" style=" " />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>

                </div>


            </div>
            <div class="swiper-pagination d-lg-none "></div>
        </div>


    </div>




    <!----------- The second swiper ------------>
    <div class="container fadeIn" style="margin-bottom:80px;">

        <div class="swiper-container" style="--swiper-pagination-color: #fff">

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                <div class="d-block d-md-none" style="position: absolute; z-index:4; bottom:-22px; padding:61px;">
                    <div class="text">Tuin in Voorthuizen</div>
                </div>
                <div class="d-none d-md-block" style="position: absolute; z-index:4; bottom:-22px; padding:82px;">
                    <div class="text">Tuin in Voorthuizen</div>
                </div>


                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg" alt="scaled5"
                            class="object-fit-cover rounded" style="" />

                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>

                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled13"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled65"
                            class="object-fit-cover rounded" style="  " />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt="scaled51"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination d-lg-none"></div>

        </div>


    </div>


    <!--------- The third swiper --------->

    <div class="container fadeIn" style="margin-bottom:80px;">


        <div class="swiper-container" style="--swiper-pagination-color: #fff">
            <div class=" swiper mySwiper smrow order-2 projecten-slider d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                <div class="d-block d-md-none" style="position: absolute; z-index:4; bottom:-22px; padding:61px;">
                    <div class="text">Tuin bij Tiny House</div>
                </div>
                <div class="d-none d-md-block" style="position: absolute; z-index:4; bottom:-22px; padding:82px;">
                    <div class="text">Tuin bij Tiny House</div>
                </div>



                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg" alt="scaled5"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled13"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled65"
                            class="object-fit-cover rounded" style="  " />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt="scaled51"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                            alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                            class="object-fit-cover rounded" style="" />
                        <!-- Overlay Img -->
                        <div class="overlay d-block d-md-block d-lg-none  rounded"></div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination d-lg-none"></div>

        </div>


    </div>



    <!------Contact Opnemen Section  ---------->
    <div class="bg-leaf">
        <div class="container d-none d-lg-block" style="margin-top:60px;">
            <div class="bottom-text">
                <div class="row">
                    <div class="col-lg-6  position-relative fadeIn " data-side="left">
                        <div class="grid-bottom">

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                alt="Groenoverons" class="object-fit-cover rounded" loading="lazy"
                                style="height:500px;" />

                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="<?= esc_url(get_template_directory_uri()); ?>/images/41scaled.jpg" alt="">
                            <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                src="<?= esc_url(get_template_directory_uri()); ?>/images/43scaled.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 fadeIn " data-side="right">
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


    <!------- Contact Information Section on Sm Screen------------->

    <div class="container">

        <div class="line-top d-block d-lg-none"></div>
        <div style="background-color:; margin-top:40px; gap-20px; padding:20px;  "
            class="row  flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none fadeIn" data-side="right">
            <!-- <div class="line-top"></div> -->


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
            <div class="button-group col-12 col-lg-4 d-flex flex-row  justify-content-start" style="margin-bottom:70px">
                <div class="title d-flex  flex-row d-md-flex d-lg-none align-items-center justify-content-start gap-1">
                    <div class="circle-border">
                        <a class="btn btn-primary " href="/contact" style="padding: 10px 40px; font-size:;">Neem
                            contact
                            op
                        </a>
                    </div>
                    <!-- <div class="line-contact between d-flex  d-md-flex  d-lg-flex "></div> -->
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







    <!------------ The Modal Tuin in Ede ----------->
    <div id="myModal" class="modal">

        <div class="  modal-content  " data-side="">
            <div class="container">
                <div class="d-flex flex-lg-row justify-content-spacebetween  " style="position: relative;
                    top: -116px;">
                    <span class="close">&times;</span>
                    <div id="caption">Tuinonderhoud in Ede</div>
                </div>

                <!-- <span class="close">&times;</span>
                <div id="caption">Tuinonderhoud in Ede</div> -->

                <div class="swiper-container " style="--swiper-pagination-color: #fff">
                    <div class="swiper mySwiper smrow order-2 projecten-slider"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287 ;overflow:visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/12scaled.jpg"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" style=" " />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg"
                                    alt="scaled11" class="object-fit-cover rounded" style="" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/17scaled.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-spacebetween" style="position: relative;
                    top: -116px;">

                    <div class=" flex  flex-lg-row align-items-center justify-content-center">
                        <div class="swiper-button-prev d-none d-lg-flex" style="left:1%; top:84%; position: absolute; color:white;
                        border:1px solid white; border-radius:50px;width:50px;
                        height: 50px;
                         font-size: 20px;
                         text-align: center;
                         
                        "></div>
                        <div class="swiper-button-next d-none d-lg-flex" style="left:7%;top:84%; color:white; position:absolute; border:1px solid white; border-radius:50px;width:50px;
                       height: 50px;
                       font-size: 20px;
                       text-align: center;
                      ">
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>



    <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the image 
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // Whextthe user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    </script>


    <!--------- Second Modal Tuin in Voorthuizen id="myImg2" ----------->
    <div id="myModal2" class="modal">

        <div class="  modal-content  " data-side="">
            <div class="container">
                <div class="d-flex flex-lg-row justify-content-spacebetween" style="position: relative;
                    top: -116px;">
                    <span class="close">&times;</span>
                    <div id="caption2">Tuin in Voorthuizen</div>
                </div>

                <!-- <span class="close">&times;</span>
            <div id="caption">Tuin in Voorthuizen</div> -->
                <div class="swiper-container " style="--swiper-pagination-color: #fff">
                    <div class="swiper mySwiper smrow order-2 projecten-slider"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287; overflow:visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" style=" " id="img02" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" style=" " id="img02" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/16scaled.jpg"
                                    alt="scaled11" class="object-fit-cover rounded" style="" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/27scaled.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-spacebetween" style="position: relative;
                    top: -116px;">

                    <div class=" flex  flex-lg-row align-items-center justify-content-center">
                        <div class="swiper-button-prev d-none d-lg-flex" style="left:1%; top:84%; position: absolute; color:white;
                        border:1px solid white; border-radius:50px;width:50px;
                        height: 50px;
                         font-size: 20px;
                         text-align: center;
                         
                        "></div>
                        <div class="swiper-button-next d-none d-lg-flex" style="left:7%;top:84%; color:white; position:absolute; border:1px solid white; border-radius:50px;width:50px;
                       height: 50px;
                       font-size: 20px;
                       text-align: center;
                      ">
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>



    <script>
    // Get the modal
    var modal2 = document.getElementById("myModal2");
    // Get the image 
    var img2 = document.getElementById("myImg2");
    var modalImg2 = document.getElementById("img02");
    var captionText2 = document.getElementById("caption2");
    img2.onclick = function() {
        modal2.style.display = "block";
        modalImg2.src = this.src;
        captionText2.innerHTML = this.alt;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[1];
    // Whextthe user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal2.style.display = "none";
    }
    </script>


    <!------------ Third Modal Tuin in Voorthuizen id="myImg3" --------------->
    <div id="myModal3" class="modal ">

        <div class="  modal-content  " data-side="">
            <div class="container">
                <div class="d-flex justify-content-spacebetween" style="position: relative;
                    top: -116px;">
                    <span class="close ">&times;</span>
                    <div id="caption" class="">Tuin bij Tiny House</div>
                </div>
                <div class="swiper-container " style="--swiper-pagination-color: #fff">
                    <div class="swiper mySwiper smrow order-2 projecten-slider"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287; overflow:visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" style=" " id="img02" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/51scaled.jpg"
                                    alt="chinaoldgarden" class="img1 object-fit-cover rounded" style=" " id="img02" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg"
                                    alt="scaled11" class="object-fit-cover rounded" style="" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/69scaled.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/84scaled.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="" />
                            </div>
                            <div class="swiper-slide" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/58scaled.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-spacebetween" style="position: relative;
                    top: -116px;">

                    <div class=" flex  flex-lg-row align-items-center justify-content-center">
                        <div class="swiper-button-prev d-none d-lg-flex" style="left:1%; top:84%; position: absolute; color:white;
                        border:1px solid white; border-radius:50px;width:50px;
                        height: 50px;
                         font-size: 20px;
                         text-align: center;
                         
                        "></div>
                        <div class="swiper-button-next d-none d-lg-flex" style="left:7%;top:84%; color:white; position:absolute; border:1px solid white; border-radius:50px;width:50px;
                       height: 50px;
                       font-size: 20px;
                       text-align: center;
                      ">
                        </div>
                    </div>
                    <div class="" id="caption2" style="   
                    right: 1%;
                      top: 84%;
                     position: absolute;
                    color: white;
                    font-size: 20px;
                    padding: 8px;">
                        GROENtuinen heeft de aanleg van deze prachtige botanische tuin in Barneveld verzorgd.
                    </div>

                </div>


            </div>
        </div>
    </div>



    <script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");
    // Get the image 
    var img3 = document.getElementById("myImg3");
    var modalImg3 = document.getElementById("img03");
    var captionText3 = document.getElementById("caption");
    var captionText4 = document.getElementById("caption2");
    img3.onclick = function() {
        modal3.style.display = "block";
        modalImg3.src = this.src;
        captionText3.innerHTML = this.alt;
        captionText4.innerHTML = this.alt;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[2];
    // Whextthe user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal3.style.display = "none";
    }
    </script>







    <!------------------------------ Swiper JS -------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <!-- Initialize Swiper -->
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