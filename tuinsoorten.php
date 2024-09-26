<?php get_header();
//Template Name: tuinsoorten ?>

<main class="flex-grow-1">
    <style>
    @media (min-width: 992px) {




        .img1 {
            border-radius: 10px;

            width: 626px;
            height: 440px;
        }

        .img2 {
            border-radius: 10px;

            /* width: 370px;
            height: 591px; */
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


        .lin3 {
            border: 1px solid #ffffff;
            height: 1px;
            width: 100%;
            margin-top: 120px;
            /* margin-bottom: 90PX; */
        }

        .houseinbackground {
            width: 500px;
            height: 382px;
            margin-left: 120px;
        }
    }
    </style>

    <div class="container">
        <div class=" d-flex flex-column text-center my-4  ">
            <h1 class="mb-3">Tuinsoorten</h1>
            <!-- Breadcrumb Links -->
            <div class="d-inline-block">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Tuinsoorten</span>
            </div>
        </div>


        <!-- First Container -->
        <div class="container " style="margin-top: 300px">
            <div class="row">

                <!-- 1st Row: Text and Image on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4">
                    <div class="text-header">
                        Landelijke tuin <span>-</span>
                    </div>
                    <div class="text">
                        <p>Een tuin met een natuurlijke uitstraling: dat is een landelijke tuin. Deze
                            tuin heeft een gazon, veel groen, is volop beplant en ruim ingedeeld.
                            Natuurlijk moet je tuin goed onderhouden worden, maar bij een landelijke
                            tuin laat je de natuur ook haar gang gaan. In een landelijke tuin worden
                            vooral natuurlijke en duurzame materialen gebruikt.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png" alt="groenoverons"
                        class="img1" />
                </div>

                <!-- 2nd Row: Two Images on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4 text-center d-none  d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/beautifulpinkflowers.png"
                        alt="groenoverons" class="img2" />
                </div>
                <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/paarsflowers.png" alt="Paarsflowers"
                        class="img3" />
                </div>
                <div class="lin3"></div>
            </div>

            <!-- Swiper On Small Screen -->

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png" alt="groenoverons"
                            class="img1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/beautifulpinkflowers.png"
                            alt="groenoverons" class="img2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/paarsflowers.png"
                            alt="groediverons" class="img3" />
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>

        </div>

        <!-- 2 -->


        <div class="container" style="margin-top: 80px">
            <div class="row">

                <!-- 1st Row: Text and Image on LG, Stacked on SM -->

                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/flowerdroplets.png"
                        alt="Flower with droplets.png" class="img1" />
                </div>

                <div class="col-12 col-lg-6 mb-4">
                    <div class="text-header">
                        Landelijke tuin <span>-</span>
                    </div>
                    <div class="text">
                        <p>Een tuin met een natuurlijke uitstraling: dat is een landelijke tuin. Deze
                            tuin heeft een gazon, veel groen, is volop beplant en ruim ingedeeld.
                            Natuurlijk moet je tuin goed onderhouden worden, maar bij een landelijke
                            tuin laat je de natuur ook haar gang gaan. In een landelijke tuin worden
                            vooral natuurlijke en duurzame materialen gebruikt.
                        </p>
                    </div>
                </div>

                <!-- 2nd Row: Two Images on LG, Stacked on SM -->

                <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/houseinbackground.png"
                        alt="Houseinbackground" class="houseinbackground" />
                </div>
                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinenscaled.jpg"
                        alt="Beautifulpinkflowers" class="img2" />
                </div>



                <div class="lin3"></div>
            </div>

            <!-- Swiper On Small Screen -->

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/houseinbackground.png" alt="groenoverons"
                            class="img1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinenscaled.jpg"
                            alt="groenoverons" class="img2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flowerdroplets.png"
                            alt="groediverons" class="img3" />
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>

        </div>

        <!--  -->
        <!-- 3 -->


        <div class="container" style="margin-top: 80px">
            <div class="row">

                <!-- 1st Row: Text and Image on LG, Stacked on SM -->



                <div class="col-12 col-lg-6 mb-4">
                    <div class="text-header">
                        Landelijke tuin <span>-</span>
                    </div>
                    <div class="text">
                        <p>Een tuin met een natuurlijke uitstraling: dat is een landelijke tuin. Deze
                            tuin heeft een gazon, veel groen, is volop beplant en ruim ingedeeld.
                            Natuurlijk moet je tuin goed onderhouden worden, maar bij een landelijke
                            tuin laat je de natuur ook haar gang gaan. In een landelijke tuin worden
                            vooral natuurlijke en duurzame materialen gebruikt.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="Scaled"
                        class="img1" />
                </div>

                <!-- 2nd Row: Two Images on LG, Stacked on SM -->


                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/dutchgarden.png" alt="Dutch garden"
                        class="img2" />
                </div>
                <div class="col-12 col-lg-6  text-center  mb-4 d-none d-md-none d-lg-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/gardeninsunlight.png"
                        alt="Gardeninsunlight" class="img3" />
                </div>



                <!-- <div class="lin3"></div> -->
            </div>

            <!-- Swiper On Small Screen -->

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-flex d-lg-none"
                style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="
                                 <?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="Scaled"
                            class="img1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/dutchgarden.png"
                            alt="Dutch garden" class="img2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/gardeninsunlight.png"
                            alt="Garden in sunlight" class="img3" />
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>

        </div>

        <!--  -->

        <!-- Contact Information Section on Lg Screen -->

        <div style="margin-top:269px">
            <div class="  flex-lg-row  d-flex flex-column align-items-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; font-size: 30px;">
                    <span>
                        Enthousiast? Neem contact op!</span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a class="btn btn-secondary" aria-label="telefoon Contact" href="tel:+31621830806"
                            style="padding-left: 40px;padding-right: 30px"> +31
                            6
                            21830806</a>
                    </div>
                    <div class="circle-border">
                        <a class="btn btn-primary" aria-label="Mail Contact" href="mailto:info@groentuinen.nl"
                            style="padding-left: 40px;padding-right: 30px">info@groentuinen.nl</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Contact Information Section on Sm Screen -->

    <div>

        <div style="background-color:#2A3F31; margin-top:40px; gap-20px; padding:20px "
            class="row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none">


            <div class="col-12 col-lg-4 text-center text-lg-left" style="margin-top:20px; ">
                <h2 style="font-size:36px;
                padding-bottom: 39px; 
                color: #fff;
                line-height: 55px;">
                    Enthousiast? Neem contact op!
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

</main>

<?php get_footer() ?>