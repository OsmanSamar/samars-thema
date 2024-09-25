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

        <div class="container">
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

                <div class="col-12 col-lg-6 mb-4 text-center d-none d-md-flex">
                    <img src="
                         <?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png" alt="groenoverons"
                        class="img1" />
                </div>

                <!-- 2nd Row: Two Images on LG, Stacked on SM -->
                <div class="col-12 col-lg-6 mb-4 text-center d-none  d-md-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/beautifulpinkflowers.png"
                        alt="groenoverons" class="img2" />
                </div>
                <div class="col-12 col-lg-6  text-center  mb-4 d-none  d-md-flex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ladybug.png" alt="groediverons"
                        class="img3" />
                </div>

            </div>

            <!-- Swiper On Small Screen -->

            <div #swiperRef="" class="swiper mySwiper smrow order-2 projecten-slider  d-flex d-md-none"
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
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ladybug.png" alt="groediverons"
                            class="img3" />
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>

        </div>

        <!--  -->






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