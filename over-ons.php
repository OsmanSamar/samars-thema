<?php get_header();
//Template Name: over ons
?>

<main class="flex-grow-1">
    <style>
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

    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1200px;
        background-position: 110% 2.5%;


    }



    .bg-img {
        position: relative;
        text-align: center;
        color: #F8F4EA;
        font-weight: bold;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: auto;
        margin-bottom: 0;
        background-size: cover;
    }

    .nline {
        border: 1px solid #ffffff;
        opacity: 0.3;
        width: 1308px;
        height: 1px;
    }


    .groentuinen {
        display: block;
        object-fit: cover;
        border-radius: 10px;
        width: 100%;
        height: 34vh;
    }

    .content {
        position: absolute;
        /* top: 94%; */
        top: 73%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        text-align: center;
        color: white;
    }

    .bottom-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }


    .content h1 {

        /* margin-bottom: 338px; */
        font-size: 40px;
        line-height: 70px;
        font-weight: bold;
        margin-top: -38px;
    }


    .vl3 {
        border-left: 1px solid white;
        height: 70px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: -5px;
        display: flex;
        opacity: .5;
        transform: translate(-50%, -50%);
    }


    /* Md Screen */
    @media (min-width: 768px) {

        .content h1 {

            font-size: 40px;
            line-height: 70px;
            font-weight: bold;
            margin-top: -38px;
        }

        .content {
            position: absolute;
            /* top: 94%; */
            top: 83%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            color: white;
        }

        .vl2 {
            border-left: 1px solid white;
            height: 73px;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: -5px;
            display: flex;
            opacity: .5;
        }

    }


    .down1 {
        display: none;
        transition: transform 0.3s ease;
        width: 45px;
        cursor: pointer;
        top: 94%;
        left: 50%;
        transform: translate(95%, 360%);
    }

    .vl {
        display: none;
    }

    .groenoverons {
        width: 100%;
        /* height: 823px; */
        object-fit: cover;
        border-radius: 10px;
    }


    /* MD Screen */
    @media (min-width: 768px) {
        .swiper {
            width: 100%;
            /* height: 716px; */
            height: 629px;
            margin: 20px auto;
        }
    }


    @media (min-width: 992px) {

        .groenoverons {
            height: 823px;
        }

        /* height:566px */
        .groentuinen {
            display: block;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
            height: 566px;
        }

        .swiper-container .swiper-pagination {
            display: none;
        }

        /* Hide arrow on large screens */
        .down {
            display: none;
        }

        .down1 {
            display: flex;
            transition: transform 0.3s ease;
            width: 45px;
            cursor: pointer;
            top: 94%;
            left: 50%;
            transform: translate(95%, 360%);
        }

        .content {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            color: white;
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

        .text {
            font-size: 20px;
            margin-left: 50px;
        }

        .text2 {
            font-size: 20px;
            text-align: center;
            font-family: 'Inclusive Sans', sans-serif;
        }

        .text-header {
            font-size: 40px;
            margin-left: 50px;
            margin-top: 80px;
        }

        .img1 {
            border-radius: 10px;
            /* width: 626px;
                height: 377px; */
            width: 640px;
            height: 438px;
        }

        .img2 {
            border-radius: 10px;
            width: 525px;
            height: 616px;
        }

        .img3 {
            border-radius: 10px;
            /* width: 626px;
                height: 382px; */
            width: 630px;
            height: 438px;
        }

        .img3,
        .img1,
        .img2,
        .groentuinen {
            object-fit: cover;
        }

        .vl {
            border-left: 1px solid white;
            height: 237px;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: 1590px;
            display: flex;
            opacity: .5;
        }

    }

    .text {
        font-size: 20px;
        text-align: left;
        align-items: start;
        margin-bottom: 48px;
    }

    .text2 {
        font-size: 20px;
        text-align: center;
        /* font-family: 'Inclusive Sans', sans-serif; */
    }

    .text-header {

        font-size: 40px;
        text-align: left;
        align-items: start;
        margin-bottom: 48px;
    }

    @media (min-width: 768px) {
        .line2 {
            height: 1px;
            width: 52vw;
            background-color: #ffffff;
            color: #ffffff;
            position: relative;
            margin-right: 10px;
            display: block;
        }
    }
    </style>

    <div></div>

    <div class="bg-leaf">
        <div class="container">
            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Over ons</span>
            </div>

            <div class="container bg-img mt-lg-auto mb-0 fadeIn ">
                <div class="position-relative">
                    <div class=" overlay" style=" border-radius: 10px;"></div>

                    <img src="<?= get_field("overons_bg")['url'] ?>" alt="<?= get_field("overons_bg")['alt'] ?>"
                        class="groentuinen" style="object-fit:cover;" />
                    <div class="content center">
                        <div class=" bottom-center">
                            <h1>
                                <span class="d-lg-none d-block">
                                    <?= get_field("title_on_bg_img_on_sm_screen") ?>
                                </span>
                            </h1>
                            <h1 class="d-lg-block d-none">
                                <?= get_field("title_on_bg_on_lg_screen") ?>
                            </h1>
                        </div>
                        <div class=" bottom-center" style="margin-top: ;">
                            <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                                <img src="<?= get_field("downarrow")['url'] ?>"
                                    alt="<?= get_field("downarrow")['alt'] ?>" class="downarrow-icon" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-lg-start text-center" id="content">
                <div class="container">
                    <!-- Down Arrow -->
                    <a class="down1 d-lg-flex d-none mb-0" aria-label="Go to the content" href="#content">
                        <img src="<?= get_field("downarrow")['url'] ?>" alt="<?= get_field("downarrow")['alt'] ?>"
                            class="downarrow-icon" />
                    </a>
                    <div class="row">
                        <!-- Column Wrapper -->
                        <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5 py-5">
                            <div class="row gx-5">
                                <!-- 1st Column -->
                                <div class="col-12 col-md-12 col-lg-5 order-2 order-lg-1 mb-4 mb-lg-0 fadeIn "
                                    data-side="left">
                                    <div class="d-flex flex-column text-center align-items-center  ">
                                        <img src="<?= get_field("groenoverons_img")['url'] ?>"
                                            alt="<?= get_field("groenoverons_img")['alt'] ?>" class="groenoverons" />
                                    </div>
                                </div>
                                <!--2nd Column -->
                                <div class="col-12 col-md-12 col-lg-7 ml-lg-4 order-1 order-lg-2 ">
                                    <div class="d-flex flex-column  text-left align-items-start fadeIn  "
                                        data-side="right">
                                        <span class="text-header ">
                                            <?= get_field("vakkundig_maatwerk_title") ?>
                                            <span style=" opacity: 0.3; ">-</span>
                                        </span>
                                        <div class="text ">
                                            <p>
                                                <?= get_field("vakkundig_maatwerk_text") ?>
                                            </p>

                                            <div class=" d-none d-lg-flex " style="margin-top:70px;">
                                                <div class="circle-border" style="left:calc(var(--bs-gutter-x)* -0.1);">
                                                    <a href="<?= get_field("kennismaken_btn")['url'] ?>"
                                                        class="btn btn-primary"
                                                        style=" white-space: nowrap; padding-left: 40px;padding-right: 40px; font-size:18px;">
                                                        <?= get_field("kennismaken_btn")['title'] ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text d-lg-none d-flex flex-row  align-items-center "
                                            style="white-space:no-wrap;">
                                            <div class="circle-border">
                                                <a href="<?= get_field("kennismaken_btn")['url'] ?>"
                                                    class="btn btn-primary"
                                                    style=" white-space: nowrap;font-size:18px;"><?= get_field("kennismaken_btn")['title'] ?>
                                                </a>
                                            </div>
                                            <div class="nline"></div>
                                        </div>
                                    </div>

                                    <!--Verticall line On Lg Screen  -->
                                    <div class="vl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->

            <div class="position-relative ">
                <div class="row">
                    <!-- Column Wrapper -->
                    <div class="fadeIn">
                        <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5  ">
                            <!-- py-5 -->
                            <div class="row gx-5">
                                <!-- 1st Column -->
                                <div class="d-none d-md-none d-lg-flex justify-content-center flex-row gap-3  ">
                                    <div class="mt-auto mb-5">
                                        <img src="<?= get_field("left_img")['url'] ?>"
                                            alt="<?= get_field("left_img")['alt'] ?>" class="img1"
                                            style="object-fit:cover;" />
                                    </div>
                                    <div class="">
                                        <img src="<?= get_field("middel_img")['url'] ?>"
                                            alt="<?= get_field("middel_img")['alt'] ?>" class="img2"
                                            style="object-fit:cover;" />
                                    </div>
                                    <div class="mt-auto">
                                        <img src="<?= get_field("right_img")['url'] ?>"
                                            alt="<?= get_field("right_img")['alt'] ?>" class="img3"
                                            style="object-fit:cover;" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>


                <!--Verticall line On Lg Screen  -->
                <div class="vl3 d-lg-none d-md-none d-block"></div>
                <div class="vl2 d-lg-none d-md-block"></div>

                <!-- Text Section -->
                <div class="order-1 order-md-1 order-lg-2 fadeIn ">
                    <div class=" py-1">
                        <div class="col-lg-7 col-12 mx-auto text-center d-flex flex-column  align-items-center">
                            <h2 style="font-size:36px;
                                  padding-bottom: 39px; 
                                color: #fff;
                               line-height: 55px;
                               margin-top:20px;">

                                <?= get_field("laat_jouw_tuin_opvallen_title") ?>
                            </h2>
                            <div class="text2 ">
                                <div class="  d-flex flex-column align-items-center" style="font-size:20px">
                                    <p class="content1">
                                        <span style="font-weight: 400;">
                                            <?= get_field("laat_jouw_tuin_opvallen_text") ?>
                                        </span>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down down-arrow">
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <style>
                            /* Overlay gradient effect and initial hidden state for small and tablet screens */
                            @media (max-width: 991px) {
                                .content1 {
                                    position: relative;
                                    max-height: 164px;
                                    overflow: hidden;
                                    transition: max-height 0.5s ease;
                                }

                                .content1.show {
                                    max-height: none;
                                }


                                .content1::after {
                                    content: "";
                                    position: absolute;
                                    bottom: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 15px;
                                    background: transparent linear-gradient(0deg, #405f4f, rgba(64, 95, 79, .961) 40%, rgba(64, 95, 79, 0)) 0 0 no-repeat padding-box;
                                    pointer-events: none;
                                    opacity: 0.9;
                                }

                                .more-text {
                                    opacity: 1;
                                }
                            }

                            .arrow {
                                font-size: 18px;
                                color: white;
                                transition: transform 0.25s;
                            }

                            .arrow.down-arrow {
                                transform: rotate(0deg);
                            }

                            .arrow.up-arrow {
                                transform: rotate(180deg);
                            }

                            .up-arrow,
                            .down-arrow {
                                font-size: 18px;
                                color: white;
                            }
                            </style>

                            <!-- Read More Read Less -->
                            <script>
                            $(document).ready(function() {
                                $('.read-more-toggle').click(function(e) {
                                    e.preventDefault();
                                    const moreText = $(this).prev('.content1').find('.more-text');

                                    // Toggle visibility and max-height of the content
                                    $(this).prev('.content1').toggleClass('show');
                                    moreText.toggleClass('d-none');

                                    // Toggle rotation class
                                    $(this).find('.arrow').toggleClass('up-arrow down-arrow');

                                });
                            });
                            </script>


                        </div>
                    </div>
                </div>
                <!-- End of textSection -->



                <!-- Swiper On Small Screen -->
                <div class="swiper-container" style="--swiper-pagination-color: #fff">
                    <div #swiperRef=""
                        class="swiper mySwiper smrow order-2 order-md-2 projecten-slider  d-flex d-md-flex d-lg-none"
                        style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                                    class="swiper-img" style="object-fit:cover; width:100%;" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("middel_img")['url'] ?>"
                                    alt="<?= get_field("middel_img")['alt'] ?>" class="swiper-img"
                                    style="object-fit:cover; width:100%;" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_field("right_img")['url'] ?>"
                                    alt="<?= get_field("right_img")['alt'] ?>" class="swiper-img"
                                    style="object-fit:cover; width:100%;" />
                            </div>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

            <!-- New Section after the text section -->
            <section class="text-line-button-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="  col-lg-2 text-center d-lg-none order-1">
                            <div class="horizontal-divider"></div>
                        </div>
                        <div class="col-lg-5 text-left  d-lg-none order-2">
                            <p style="font-size:31px;">
                                <?= get_field("_waarom_groentuinen_text") ?>
                            </p>
                        </div>

                        <div class="title d-none d-lg-flex align-items-center gap-3">
                            <h2 class="mb-0" style="font-size:32px ">
                                <?= get_field("_waarom_groentuinen_text") ?>
                            </h2>
                            <div class="line2 between d-none d-lg-block"></div>
                        </div>

                        <!-- Testimonials Section on All Screens -->
                        <div class="row  text-center2 order-3  fadeIn" style="margin-top: 100px;">
                            <?php
                            foreach (get_field("testimonials_section") as $testimonial) {
                                ?>
                            <div class="col-12 col-lg-4 testimonial">
                                <img src="<?= $testimonial['afbeelding']['url'] ?>"
                                    alt=" <?= $testimonial['afbeelding']['alt'] ?>" class="testimonial-img" />

                                <h1>
                                    <?= $testimonial["testimonials_section_title"] ?>
                                </h1>

                                <p>
                                    <?= $testimonial["testimonials_section_text"] ?>
                                </p>

                            </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </section>


            <!-- Contact Information Section on Lg Screen -->
            <div class="container fadeIn">
                <div class="flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex" style="background-color:#2A3F31; 
                border-radius: 50px; 
                margin-top:40px; margin-bottom:40px;
                gap-20px; padding:20px ">
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['title'] ?>"
                            class="groentuinen" style="width:80px; height:80px" />
                    </div>
                    <div class=" text-center text-lg-left" style="margin-left:50px; font-size:30px;
                  font-weight:300; line-height:2px;
                  font-family:'Henderson Sans-basic', sans-serif;">
                        <span>
                            <?= get_field("contact_text") ?>
                        </span>
                    </div>
                    <div class="button-group" style="margin-left:50px">
                        <div class="circle-border ">

                            <a href="tel:<?= get_field("telefoon_contact") ?>"
                                style="padding-left:40px;padding-right:40px; font-size:18px;"
                                class="btn btn-secondary"><?= get_field("telefoon_contact") ?>
                            </a>
                        </div>
                        <div class="circle-border">

                            <a href="mailto:<?= get_field("mail_contact") ?>"
                                style="padding-left:40px;padding-right:40px; font-size:18px;"
                                class="btn btn-primary"><?= get_field("mail_contact") ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>


    <!-- Contact Information Section on Sm Screen -->

    <div>

        <div style="background-color:#2A3F31; margin-top:40px; gap-20px; padding:20px  "
            class="fadeIn row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none">


            <div class="col-12 col-lg-4 text-center text-lg-left" style="margin-top:20px; ">
                <h2 style="font-size:38px;
                 padding-bottom: 39px; 
                 color: #fff;
                line-height: 66px;
                font-weight: 100">

                    Ook een GROENtuin? Neem contact
                    op!
                </h2>
            </div>
            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">
                <div class="circle-border ">
                    <a class="btn btn-secondary" style="padding:10px 40px;" aria-label="telefoon Contact"
                        href="tel:+31621830806">+31 6
                        21830806</a>
                </div>
                <div class="circle-border">
                    <a class="btn btn-primary" style="padding:10px 40px;" aria-label="Mail Contact"
                        href="mailto:info@groentuinen.nl">info@groentuinen.nl</a>
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
            clickable: true
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