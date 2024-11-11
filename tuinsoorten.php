<?php get_header();
//Template Name: tuinsoorten ?>

<main class="flex-grow-1">
    <style>
    /* MD Screen */
    @media (min-width: 768px) {
        .swiper {
            width: 100%;
            height: 629px;
            margin: 20px auto;
        }
    }

    .w-fit {
        width: fit-content !important;
    }

    .swiper-container {
        position: relative;

    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;
        display: block;
    }

    .swiper-container .swiper-pagination-bullet {
        width: 15px;
        height: 15px;

    }

    .line-left {
        background-color: #fff;
        opacity: .5;
        width: 1px;
        height: 92% !important;
    }




    /*First Swiper Buttons  */
    .header {
        margin-bottom: 60px;
        color: #FFFFFF;
        opacity: 1;
        font-family: 'Henderson Sans-basic', sans-serif;
        letter-spacing: 5px;
        font-size: 50px;
        font-weight: 300;
        line-height: 60px;
    }

    .swiper1 {
        width: 100%;
        /* height: 300px; */
        /* margin: 20px auto; */
    }

    .swiper1 .swiper-slide {
        margin: 0;
        padding: 0;
    }

    .swiper1 {
        /* margin-left: auto;
        margin-right: auto; */
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
        display: block;
    }

    .swiper-slide .btn {
        font-size: 18px;
        padding: 12px 24px;
        /* border: 2px solid #fff; */
        /* Add a contrasting border */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        line-height: 22px;
        font-family: 'Henderson Sans-basic', sans-serif;
        letter-spacing: 1px;
    }

    .custom-swiper-prev {
        position: absolute;
        top: 607px;
        z-index: 10;
        right: 56px;
        --swiper-navigation-color: #ffffff;
        border: 1px solid #fff;
        border-radius: 25px;

    }

    .custom-swiper-next {
        position: absolute;
        top: 607px;
        z-index: 10;
        right: 56px;
        --swiper-navigation-color: #ffffff;
        border: 1px solid #fff;
        border-radius: 25px;
    }


    @media (max-width: 768px) {
        .swiper-slide .btn {
            font-size: 16px;
            padding: 10px 20px;
        }
    }

    @media (min-width: 769px) {
        .swiper-slide .btn {
            font-size: 20px;
            padding: 14px 28px;
        }
    }


    .text-header {
        margin-bottom: 30px;
        color: #FFFFFF;
        opacity: 1;
        font-family: 'Henderson Sans-basic', sans-serif;
        letter-spacing: 2px;
        font-size: 40px;
        font-weight: 300;
        line-height: 60px;

    }

    .text {
        margin-bottom: 35px;
        font-size: 18px;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
        font-weight: 300;
        line-height: 40px;

    }

    @media (min-width: 992px) {

        .swiper-container .swiper-pagination {
            display: none;
        }



        .bg-leaf {
            background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
            background-size: cover;
            background-repeat: no-repeat;
            background-size: 1228px;
            background-position: 669px 11px;
        }



        .img1 {
            border-radius: 10px;

            width: 626px;
            height: 440px;
        }

        .img2 {
            border-radius: 10px;
            width: 626px;
            height: 440px;
        }

        .img3 {
            border-radius: 10px;
            width: 526px;
            height: 382px;
        }

        .img3,
        .img1,
        .img2,
        .groentuinen {
            object-fit: cover;
        }

        .houseinbackground {
            width: 500px;
            height: 382px;
            margin-left: 120px;
        }

        .position-relative {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .swiper {
            flex-grow: 1;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #ffffff;
            width: 50px;
            height: 50px;

        }

        .header {
            margin-bottom: 60px;
            color: #FFFFFF;
            opacity: 1;
            font-family: 'Henderson Sans-basic', sans-serif;
            letter-spacing: 5px;
            font-size: 125px;
            font-weight: 600;
            line-height: 60px;
            margin-top: 60px;
        }

        .text-header {
            margin-bottom: 60px;
            color: #FFFFFF;
            opacity: 1;
            font-family: 'Henderson Sans-basic', sans-serif;
            letter-spacing: 5px;
            font-size: 40px;
            font-weight: 300;
            line-height: 60px;

        }

        .text {
            margin-bottom: 35px;
            font-size: 16px;
            font-family: 'Inclusive Sans', sans-serif;
            letter-spacing: 0px;
            color: #FFFFFF;
            opacity: 1;
            font-weight: 400;
            line-height: 40px;

        }

        .border-left {
            border-left: 1px #FFFFFF solid;
            height: 440px;
            opacity: 0.5;

        }
    }



    @media (max-width: 768px) {

        .swiper-button-prev,
        .swiper-button-next {
            width: 40px;
            height: 40px;

        }
    }



    .lin3 {
        border: 1px solid #ffffff;
        height: 1px;
        width: 100%;
        margin-top: 120px;
        opacity: 0.5;

    }

    /* Set font size for swiper buttons */
    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 900;
    }
    </style>
    <div class="bg-leaf">
        <div class="container">

            <!-- Breadcrumb Links -->
            <div class=" d-flex flex-column text-center " style="margin-top:80px;">
                <div class="d-inline-block"><a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span
                        class="separator">
                        // </span>
                    <span class="" style="font-size:18px;">Tuinsoorten</span>
                </div>

                <h1 class="header fadeIn ">
                    <?= get_field("tuinsoorten_main_text") ?>
                </h1>
            </div>



            <!--  Swiper1 -->
            <div style="margin-top:140px;">
                <!-- Swiper Buttons -->
                <div class="swiper-button-prev custom-swiper-prev d-none d-md-none d-lg-flex"></div>
                <div class="swiper-button-next custom-swiper-next d-none d-md-none d-lg-flex"></div>

                <div class="position-relative d-flex align-items-center  ">

                    <!-- Swiper Slides Container -->
                    <div #swiperRef class=" swiper1 mySwiper1 "
                        style="--swiper-navigation-color: #ffffff; --swiper-pagination-color: #f5a287; flex-grow: 1;">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">
                                <div class="circle-border">
                                    <a href="#landelijke tuin" class="btn btn-secondary">Ontdek
                                        landelijke
                                        tuinen
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">
                                <div class="circle-border"><a href="#moderne-tuin" class="btn btn-secondary">Ontdek
                                        Moderne
                                        tuinen</a>
                                </div>
                            </div>
                            <div class=" swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">
                                <div class="circle-border"><a href="#ecologische-tuin" class="btn btn-secondary">Ontdek
                                        ecologische
                                        tuinen</a>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">
                                <div class="circle-border"><a href="#daktuin-of-dakterras"
                                        class="btn btn-secondary">Ontdek daktuin of dakterras
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">
                                <div class="circle-border"><a href="#ecologische-tuin" class="btn btn-secondary">Ontdek
                                        ecologische
                                        tuinen</a>
                                </div>
                            </div>
                            <div class="swiper-slide w-fit d-flex justify-content-center w-fit"
                                style="width:fit-content;">
                                <div class=" circle-border"><a href="#ecologische-tuin" class="btn btn-secondary">Ontdek
                                        ecologische tuinen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of swiper -->



            <!-- First Container -->
            <div id="landelijke tuin" class=" container " style=" margin-top: 300px">
                <div class="row">
                    <!-- 1st Row: Text and Image on LG, Stacked on SM -->
                    <div class="col-12 col-lg-6 mb-4 fadeIn ">
                        <div class="text-header">

                            <?= get_field("landelijke_tuin_title") ?>
                            <span>-</span>
                        </div>
                        <div class="text">
                            <p>
                                <?= get_field("landelijke_tuin_text") ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">
                        <img src="<?= get_field("groenoverons_img")['url'] ?>"
                            alt="<?= get_field("groenoverons_img")['alt'] ?>" class="img1" />
                    </div>
                    <!-- 2nd Row: Two Images on LG, Stacked on SM -->
                    <div class="col-12 col-lg-6 mb-4 text-center d-none  d-none d-md-none d-lg-flex fadeIn">
                        <img src="<?= get_field("beautifulpinkflowers_img")['url'] ?>"
                            alt="<?= get_field("beautifulpinkflowers_img")['alt'] ?>" class="img2" />

                    </div>
                    <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex fadeIn">
                        <img src="<?= get_field("paarsflowers_img")['url'] ?>"
                            alt="<?= get_field("paarsflowers_img")['alt'] ?>" class="img3" />

                    </div>
                    <div class="lin3 d-none d-md-none d-lg-block"></div>
                </div>

                <!-- Swiper On Small Screen  First Swiper -->
                <div class="swiper-container" style="--swiper-pagination-color: #fff">

                    <div class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: ">

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= get_field("groenoverons_img")['url'] ?>"
                                    alt="<?= get_field("groenoverons_img")['alt'] ?>" class="img1" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("beautifulpinkflowers_img")['url'] ?>"
                                    alt="<?= get_field("beautifulpinkflowers_img")['alt'] ?>" class="img2" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("paarsflowers_img")['url'] ?>"
                                    alt="<?= get_field("paarsflowers_img")['alt'] ?>" class="img3" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="lin3 d-block d-md-block d-lg-none"></div>


        <!-- 2  -->
        <div class="container">
            <div id="moderne-tuin" class="container" style="margin-top: 80px">
                <div class="row">
                    <!-- 1st Row: Text and Image on LG, Stacked on SM -->
                    <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">

                        <img src="<?= get_field("flowerdroplets_img")['url'] ?>"
                            alt="<?= get_field("flowerdroplets_img")['alt'] ?>" class="img1" />
                    </div>


                    <div class="col-lg-6 ">
                        <div class="row soort-row">
                            <div class="col-2  ">
                                <div class="line-left  mb-lg-3 d-none d-lg-flex"></div>
                            </div>
                            <div class="col-lg-10 fadeIn">
                                <h2 class=" text-header">
                                    <?= get_field("moderne_tuin_title") ?>
                                </h2>
                                <div class="text ">
                                    <p>
                                        <?= get_field("moderne_tuin_text") ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd Row: Two -->

                    <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex fadeIn ">
                        <img src="<?= get_field("houseinbackground_img")['url'] ?>"
                            alt="<?= get_field("houseinbackground_img")['alt'] ?>" class="houseinbackground" />
                    </div>
                    <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn ">
                        <img src="<?= get_field("tuinenscaled_img")['url'] ?>"
                            alt="<?= get_field("tuinenscaled_img")['alt'] ?>" class="img2" />
                    </div>
                    <div class="lin3 d-none d-md-none d-lg-block"></div>
                </div>
                <!-- Swiper On Small Screen -->
                <div class="swiper-container" style="--swiper-pagination-color: #fff">

                    <div #swiperRef=""
                        class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= get_field("houseinbackground_img")['url'] ?>"
                                    alt="<?= get_field("houseinbackground_img")['alt'] ?>" class="img1" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("tuinenscaled_img")['url'] ?>"
                                    alt="<?= get_field("tuinenscaled_img")['alt'] ?>" class="img2" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("flowerdroplets_img")['url'] ?>"
                                    alt="<?= get_field("flowerdroplets_img")['alt'] ?>" class="img3" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="lin3 d-block d-md-block d-lg-none"></div>
    </div>


    <!-- 3 -->
    <div class="container">
        <div id="ecologische-tuin" class=" container " style="margin-top: 80px">
            <div class="row">
                <!-- 1st Row: Text and Image on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4 fadeIn">
                    <div class="text-header">
                        <?= get_field("ecologische_tuin_title") ?>
                        <span>-</span>
                    </div>
                    <div class="text">
                        <p>
                            <?= get_field("ecologische_tuin_text") ?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">
                    <img src="<?= get_field("scaled_img")['url'] ?>" alt="<?= get_field("scaled_img")['alt'] ?>"
                        class="img1" />
                </div>
                <!-- 2nd Row: Two Images on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">
                    <img src="<?= get_field("dutchgarden_img")['url'] ?>"
                        alt="<?= get_field("dutchgarden_img")['alt'] ?>" class="img2" />
                </div>
                <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex fadeIn">
                    <img src="<?= get_field("gardeninsunlight_img")['url'] ?>"
                        alt="<?= get_field("gardeninsunlight_img")['alt'] ?>" class="img3" />
                </div>

            </div>
            <div class="lin3  d-none d-md-none d-lg-block"></div>
        </div>



        <!-- Swiper On Small Screen -->
        <div class="swiper-container" style="--swiper-pagination-color: #fff">
            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="Scaled"
                            class="img1" />
                    </div>
                    <div class="swiper-slide"><img
                            src="<?= esc_url(get_template_directory_uri()); ?>/images/dutchgarden.png"
                            alt="Dutch garden" class="img2" />
                    </div>
                    <div class="swiper-slide"><img
                            src="<?= esc_url(get_template_directory_uri()); ?>/images/gardeninsunlight.png"
                            alt="Garden in sunlight" class="img3" />
                    </div>

                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="lin3 d-block d-md-block d-lg-none"></div>


    <!-- 4 -->
    <div class="container">
        <div id="daktuin-of-dakterras" class="container" style="margin-top: 80px">
            <div class="row">
                <!-- 1st Row: Text and Image on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">
                    <img src="<?= get_field("flowerdroplets_img")['url'] ?>"
                        alt="<?= get_field("flowerdroplets_img")['alt'] ?>" class="img1" />
                </div>
                <div class="col-lg-6">
                    <div class="row soort-row">
                        <div class="col-2 justify-content-center d-flex ">
                            <div class="border-left h-100"></div>
                        </div>
                        <div class="col-lg-10 fadeIn ">
                            <h2 class=" text-header">
                                <?= get_field("daktuin_of_dakterras_title") ?>
                            </h2>
                            <div class="text ">
                                <p>
                                    <span>
                                        <?= get_field("daktuin_of_dakterras_text") ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex fadeIn">
                    <img src="<?= get_field("houseinbackground_img")['url'] ?>"
                        alt="<?= get_field("houseinbackground_img")['alt'] ?>" class="houseinbackground" />
                </div>
                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex fadeIn">


                    <img src="<?= get_field("tuinenscaled_img")['url'] ?>"
                        alt="<?= get_field("tuinenscaled_img")['alt'] ?>" class="img2" />
                </div>

            </div>


            <!-- Swiper On Small Screen -->

            <div class="swiper-container" style="--swiper-pagination-color: #fff">

                <div #swiperRef="" class=" swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                    style="--swiper-navigation-color: #f5a287; ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?= get_field("houseinbackground_img")['url'] ?>"
                                alt="<?= get_field("houseinbackground_img")['alt'] ?>" class="img1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinenscaled.jpg"
                                alt="groenoverons" class="img2" /><img src="<?= get_field("tuinenscaled_img")['url'] ?>"
                                alt="<?= get_field("tuinenscaled_img")['alt'] ?>" class="img2" />
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= get_field("flowerdroplets_img")['url'] ?>"
                                alt="<?= get_field("flowerdroplets_img")['alt'] ?>" class="img3" />
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>



    <!--Contact Information Section on Lg Screen  -->
    <div class="container fadeIn" style="margin-top:269px">
        <div class=" d-flex flex-lg-row    align-items-center justify-content-center d-none d-lg-flex"
            style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
            <div class="d-flex justify-content-center justify-content-lg-start">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                    class="groentuinen" style="width:80px; height:80px" />
            </div>
            <div class=" text-center text-lg-left" style="margin-left:50px;
             font-size: 30px; 
            font-weight:300; line-height:2px;
                  font-family: 'Henderson Sans-basic', sans-serif;
                   ">
                <span>
                    <?= get_field("contact_text") ?>
                </span>
            </div>
            <div class="button-group" style="margin-left:50px">
                <div class="circle-border ">
                    <a href="tel:<?= get_field("telefoon_contact") ?>" class="btn btn-secondary"
                        style=" white-space: nowrap;"><?= get_field("telefoon_contact") ?>
                    </a>
                </div>
                <div class="circle-border">
                    <a href="mailto:<?= get_field("mail_contact") ?>" class="btn btn-primary"
                        style=" white-space: nowrap;"><?= get_field("mail_contact") ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section on Sm Screen  -->
    <div>
        <div style="background-color:#2A3F31; margin-top:40px; gap-20px; padding:20px "
            class="fadeIn row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none">
            <div class="col-12 col-lg-4 text-center text-lg-left" style="margin-top:20px; ">
                <h2 style="font-size:36px;
                           padding-bottom: 39px;
                          color: #fff;
                         line-height: 55px; ">
                    <?= get_field("contact_text") ?>
                </h2>
            </div>
            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">
                <div class="circle-border ">
                    <a href="tel:<?= get_field("telefoon_contact") ?>" class="btn btn-secondary"
                        style=" white-space: nowrap;"><?= get_field("telefoon_contact") ?>
                    </a>

                </div>
                <div class="circle-border">
                    <a href="mailto:<?= get_field("mail_contact") ?>" class="btn btn-primary"
                        style=" white-space: nowrap;"><?= get_field("mail_contact") ?>
                    </a>

                </div>
            </div>
            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">

                <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['alt'] ?>" class="groentuinen"
                    style="width:120px; height:120px;  object-fit: cover;" />
            </div>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <!-- Initialize Swiper -->
    <script>
    document.querySelectorAll(".swiper-container").forEach(container => {
        var swiper = new Swiper(container.querySelector(".mySwiper"), {
                slidesPerView: 1.2,
                centeredSlides: true,
                //loop: true,
                grabCursor: true,
                spaceBetween: 5,
                pagination: {
                    el: container.querySelector(".swiper-pagination"),
                    clickable: true,


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

    <!--  Swiper1 -->
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper1", {



            slidesPerView: 1.2,
            centeredSlides: true,
            // loop: true,
            grabCursor: true,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            }

            ,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }

            ,
            breakpoints: {


                540: {
                    slidesPerView: 2,
                    spaceBetween: 4,
                },

                556: {
                    slidesPerView: 2.5,
                    spaceBetween: 1,
                },
                992: {

                    slidesPerView: 3.5,
                    spaceBetween: 5,
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