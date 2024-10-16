<?php get_header() //Template Name: advies ?>


<main id="page" class="flex-grow-1">
    <style>
    .line-left {
        background-color: #fff;
        opacity: .5;
        width: 1px;
    }

    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: ;
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

    .flex-container {
        text-align: center;
    }

    .text-header {
        font-family: 'Inclusive Sans', sans-serif;
        font-size: 40px;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
    }

    .text {
        font-family: 'Inclusive Sans', sans-serif;
        font-size: 20px;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
        margin-top: 80px;
    }

    @media (min-width: 992px) {

        .first-img {
            height: 554px
        }

        .swiper-container .swiper-pagination {
            display: none;
        }

        .flex-container {
            text-align: left;
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
        .groentuinen,
        .first-img {
            object-fit: cover;
        }

        .bottom-under {

            border: 1px #FFFFFF solid;
            height: 1px;
            width: 100%;
            opacity: 0.5;

        }
    }
    </style>
    <div class="container">

        <div class=" d-flex flex-column text-center my-4 ">

            <!-- Breadcrumb Links -->
            <div class="d-inline-block" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 45px;
        margin-top:45px;">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span class="separator">
                    // </span>
                <span class="last">Onze diensten</span>
                <span class="separator"> // </span>
                <span class="last">Advies</span>
            </div>

            <h1 class="fadeIn d-block d-md-none d-lg-none mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 40px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;
        letter-spacing:2px;">Advies
            </h1>


            <h1 class="fadeIn d-none d-md-block d-lg-block mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 90px;
        font-weight: 700;
        line-height: 125px;
        letter-spacing:2px;">Advies</h1>
        </div>


        <!-- Here -->
        <div class="row">

            <div class="col-12  col-md-12 col-lg-6 flex-container fadeIn" data-side="left" style="margin-top:80px;">
                <div class="text-header ">
                    <h2 style="color: #fff9f4;
                    font-family: henderson-sans-basic, sans-serif;
                    color: #fff;
                    font-size: 39px;
                    font-weight: 300;
                    line-height: 60px;
                    margin-top:45px;">
                        <span style="--i:1;">Geen blad voor</span> <br>
                        <span style="--i:3;">de mond</span>

                    </h2>
                </div>
                <div class="row pb-lg-5 pb-0">
                    <div class="col-2">
                        <div class="line-left h-100 mt-lg-3 d-none d-lg-flex"></div>
                    </div>
                    <div class=" col-lg-9  mt-lg-1 mt-4">
                        <div class="text text-fix">
                            <div class="" style="--height: 400px;">
                                <p><span style="font-weight: 400;">Je hebt een prachtige tuin, maar wil graag advies
                                        over bijvoorbeeld planten of verzorging. Dat kan! Laat een tuinexpert met je
                                        meedenken en krijg advies op maat voor jouw tuin. We maken samen een plan om nóg
                                        meer uit je tuin te halen.</span></p>
                            </div>
                            <div class="read-more"></div>
                        </div>
                        <div class=" circle-border">
                            <a href="<?= esc_url(home_url('/advies')); ?>" class="btn btn-primary"
                                style=" white-space:nowrap; letter-spacing:1px; ">Kennismaken?</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-6 fadeIn " style="margin-top:80px;" data-side="right">
                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/28scaled.jpg" alt="22scaled"
                    class="first-img rounded object-fit" style="" />
            </div>
        </div>


        <!-- Second Section -->


        <div class=" ">
            <div class="row fadeIn" style="margin-top:50px;">
                <!-- Column Wrapper -->
                <div class="">
                    <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5  ">
                        <!-- py-5 -->
                        <div class="row gx-5">
                            <!-- 1st Column -->

                            <div class="d-none d-md-none d-lg-flex justify-content-center flex-row gap-3  ">
                                <div class="mt-auto mb-5">
                                    <img src="
                                            <?= esc_url(get_template_directory_uri()); ?>/images/garden50.jpg"
                                        alt="Groenoverons" class="img1" />
                                </div>
                                <div class="">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinen6.jpg"
                                        alt="Beautifulpinkflowers" class="img2" />
                                </div>
                                <div class="mt-auto">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/51scaled.jpg"
                                        alt="Ladybug" class="img3" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>

            <!-- Text Section -->
            <div class="order-1 order-md-1 order-lg-2 fadeIn ">
                <div class="text-block py-1">
                    <div class="col-lg-7 col-12 mx-auto text-center d-flex flex-column  align-items-center">
                        <h2 style="font-size:36px;
                                                  padding-bottom: 39px; 
                                                color: #fff;
                                               line-height: 55px;
                                               margin-top:20px;">
                            Andere vragen?
                        </h2>
                        <div class="text2 text-fix">
                            <div class="inner" style="line-height: 34px;
                                 letter-spacing: 0px;
                                  font-size: 22px;">
                                <p><span style="font-weight: 400;">Ook voor advies en vragen over verlichting,
                                        bewatering, (zwem)vijvers, veranda’s en andere timmerwerkzaamheden ben je bij
                                        GROENtuinen aan het juiste adres. Door onze jarenlange ervaring zijn we erg
                                        breed inzetbaar!</span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-under"></div>
            <!-- End of textSection -->



            <!-- Swiper On Small Screen -->

            <div class="swiper-container fadeIn" style="--swiper-pagination-color: #fff">
                <div #swiperRef=""
                    class="swiper mySwiper smrow order-2 order-md-2 projecten-slider  d-flex d-md-flex d-lg-none"
                    style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="
                                         <?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                alt="Groen Overons" class="swiper-img" style="width:100% ;" />
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinen6.jpg"
                                alt="Beautifulpinkflowers" class="swiper-img" style="width:100% ;" />
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ladybug.png" alt="Ladybug"
                                class="swiper-img" style="width:100% ;" />
                        </div>

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>





        <div class="bg-leaf">

            <!--Contact Opnemen Section  -->

            <div class="container d-none d-lg-block" style="margin-top:60px;">
                <div class="bottom-text">
                    <div class="row">
                        <div class="col-lg-6  position-relative fadeIn" data-side="left">
                            <div class="grid-bottom">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/bus.png"
                                    alt="Groenoverons" class="object-fit-cover rounded" style="height:500px;" />

                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/64scaled.jpg" alt="">
                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/65scaled.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-8 fadeIn" data-side="right">
                            <h2 style="line-height: 62px; letter-spacing: 4px; 
                            font-size:36px;
                             font-family: 'Henderson Sans Basic', sans-serif;
                            
                            ">Ook advies op maat?<br> Neem contact op!
                            </h2>
                            <div class="col-lg-9">
                                <div class="text">
                                    <p><span style="font-weight: 400; line-height: 30px;letter-spacing: 1px;">Ook zo’n
                                            groene tuin? Laat dat maar aan
                                            GROENtuinen over! Neem vrijblijvend contact op om de mogelijkheden te
                                            bespreken.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="title d-flex  d-md-flex d-lg-flex align-items-center gap-2">
                                <div class="circle-border">
                                    <a class="btn btn-primary " href="/contact"
                                        style="padding: 10px 20px; white-space:nowrap; letter-spacing:1px;">Contact
                                        opnemen
                                    </a>
                                </div>
                                <div class="line-contact between "></div>

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

        <div class="bg-leaf">

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
                <div class="button-group col-12 d-flex flex-row  justify-content-start" style="margin-bottom:70px">
                    <div
                        class="title d-flex flex-row  d-md-flex d-lg-flex align-items-center justify-content-start gap-1">
                        <div class="circle-border">
                            <a class="btn btn-primary " href="/contact" style="padding: 10px 20px; font-size:;">Neem
                                contact
                                op
                            </a>
                        </div>
                        <div class="dienst-line d-flex  d-md-none  d-lg-none "></div>
                        <div class="dienstline d-none  d-md-flex  d-lg-none "></div>

                    </div>

                </div>

                <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                    style="margin-bottom:-50px">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" altget_atar Image"
                        class="groentuinen" style="width:120px; height:120px;  object-fit: cover;" />
                </div>
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
        loop: true,
        grabCursor: true,
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