<?php get_header();
//Template Name: projecten ?>

<main class="flex-grow-1">
    <style>
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

    /* .grid-item:last-child {
        align-self: start;
        Moves the last image to the top
    } */

    .lin3 {
        border: 1px solid #ffffff;
        height: 1px;
        width: 100%;
        margin-top: 50px;
        opacity: 0.3;
    }

    .text-header {
        color: #F8F4EA;
        font-size: 90px;
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
    </style>
    <div>
        <div class="container  ">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Projecten</span>
            </div>

            <!-- First Container -->
            <div class="container d-lg-grid d-none  " style="margin-top: 300px">
                <div class="row ">

                    <div class="col-12 col-lg-5 mb-4 ">
                        <div class="text-header ">Projecten</div>
                        <div class="text d-lg-flex flex-row  align-items-center">
                            <div class="circle-border">
                                <a href="#" class="btn btn-primary"
                                    style="padding-left: 40px;padding-right: 40px; font-size:18px;">kennismaken?</a>
                            </div>
                            <div class="nline"></div>
                        </div>



                        <div class="grid-item" style="grid-row: span 2;  ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                                class="object-fit-cover rounded" style="height:400px;" />
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 mb-4 text-center.grid-7 ">
                        <div class="img-wrap">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                                alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                        </div>
                        <div class="grid-7">
                            <div class="row me-0">
                                <div class="col-12">
                                    <div class="grid-item  ratio ratio-custom" style="--x:53;--y:67;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                            alt="scaled19" class="object-fit-cover rounded"
                                            style="height:550px; width:; margin-left:; " />
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-0">
                                <div class="col-12">

                                    <div class="grid-item ratio ratio-custom" style="--x:39;--y:53;">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg"
                                            alt="scaled5" class="object-fit-cover rounded"
                                            style="height:450px; width:330px; margin-left:;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="image-grid col-12 d-lg-grid ">




                        <div class="grid-item" style="grid-row: span 2;">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled13"
                                class="object-fit-cover rounded"
                                style="height:450px; width:330px ; margin-left:115px;" />
                        </div>
                        <div class="grid-item" style="">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled65"
                                class="object-fit-cover rounded" style="height:800px;  " />
                        </div>
                        <div class="grid-item" style="; grid-row: span 2;">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt="scaled51"
                                class="object-fit-cover rounded" style="height:400px; width:; margin-left:;" />
                        </div>

                    </div>
                </div>
                <div class="lin3"></div>



            </div>


            <!-- 2 -->
            <!-- <div class="row">
                <div class="col-12 col-lg-5 mb-4">
                    <div class="text-header">Projecten </div>
                    <div class="text">
                        <div class="circle-border">
                            <a href="#" class="btn btn-primary"
                                style="padding-left: 40px;padding-right: 40px; font-size:18px;">kennismaken?</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                        alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                </div>

                <div class="col-12 col-lg-5 mb-4 text-center d-none  d-none d-md-none d-lg-flex ">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg" alt="scaled11"
                        class="object-fit-cover rounded  " style="height:400px; margin-bottom:60px;" />
                </div>
                <div class="col-12 col-lg-4 mb-4 text-center d-none  d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg" alt=" scaled19"
                        class="object-fit-cover rounded" style="height:600px;" />
                </div>
                <div class=" col-12 col-lg-3 mb-4 text-center d-none d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg" alt="scaled5"
                        class="object-fit-cover rounded" style="height:400px;" />
                </div>

                <div class="col-12 col-lg-5 mb-4 text-center d-none  d-none d-md-none d-lg-flex ">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg" alt="scaled13"
                        class="object-fit-cover rounded" style="height:800px;" />
                </div>
                <div class="col-12 col-lg-4 mb-4 text-center d-none  d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg" alt=" scaled65"
                        class="object-fit-cover rounded" style="height:300px;" />
                </div>
                <div class=" col-12 col-lg-3 mb-4 text-center d-none d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg" alt="scaled51"
                        class="object-fit-cover rounded" style="height:400px;" />
                </div>

            </div> -->


        </div>




    </div>
    <!-- 1 -->
    <div class="container">

        <!-- Swiper On Small Screen -->
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- 2 -->

    <div class="container">

        <!-- Swiper On Small Screen -->
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <div class="bg-leaf">

        <div>
            <p>Hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>


        </div>

    </div>





















    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {



            slidesPerView: 1.2,
            centeredSlides: true,
            loop: true,
            grabCursor: true,
            spaceBetween: 5,
            pagination: {
                el: ".swiper-pagination",

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