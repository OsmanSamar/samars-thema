<?php get_header() //Template Name: tuinaanleg ?>

<main class="page" class="flex-grow-1">
    <style>
        .vl3 {
            border-left: 1px solid white;
            height: 92px;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: -34px;
            display: flex;
            opacity: .5;
            transform: translate(-50%, -50%);
        }




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
            /* width: 70%;
        margin: 0 auto; */
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
            /* margin-top: 80px; */
        }



        @media(min-width: 768px) {
            .text {
                font-family: 'Inclusive Sans', sans-serif;
                font-size: 20px;
                color: #FFFFFF;
                opacity: 1;
                letter-spacing: 0px;
            }

            .vl2 {
                border-left: 1px solid white;
                height: 84px;
                position: absolute;
                left: 50%;
                margin-left: -3px;
                top: -96px;
                display: flex;
                opacity: .5;
            }
        }

        @media (min-width: 992px) {

            .first-img {
                height: 700px
            }

            .swiper-container .swiper-pagination {
                display: none;
            }

            .flex-container {
                text-align: left;
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
            .groentuinen,
            .first-img {
                object-fit: cover;
            }

            .bottom-under {

                border: 1px #FFFFFF solid;
                height: 1px;
                width: 100%;
                opacity: 0.5;
                margin-top: 188px;

            }

            .text {

                font-size: 24px;
                margin-top: 50px;
                margin-bottom: 60px;
            }
        }
    </style>
    <div class="container">

        <div class=" d-flex flex-column text-center my-4 ">

            <!-- Breadcrumb Links -->
            <div class="d-inline-block" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: -4px;
        margin-top:45px;">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span class="separator"> // </span>
                <span class="last">Onze diensten</span>
                <span class="separator"> // </span>
                <span class="last">Tuinaanleg</span>
            </div>

            <h1 class="fadeIn d-block d-md-none d-lg-none mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 40px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;">Tuinaanleg</h1>


            <h1 class="fadeIn d-none d-md-block d-lg-none mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 58px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;">Tuinaanleg</h1>

            <h1 class="fadeIn d-none d-md-none d-lg-block mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 90px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;">Tuinaanleg</h1>




        </div>
        <div class="row">
            <div class="col-12 col-lg-6 flex-container fadeIn" data-side="left" style="margin-top:;">

                <div class="text-header d-block d-md-none d-lg-none">
                    <h2 style="color: #fff9f4;
                  font-family: henderson-sans-basic, sans-serif;
                color: #fff;
                 font-size: 29px;
               font-weight: 300;
                line-height: 60px;
                ">
                        <span style="--i:1;">We laten er gras</span> <br>
                        <span style="--i:3;">over groeien</span>

                    </h2>
                </div>

                <div class="text-header d-none d-md-block d-lg-none">
                    <h2 style="color: #fff9f4;
                  font-family: henderson-sans-basic, sans-serif;
                color: #fff;
                 font-size: 29px;
               font-weight: 300;
                line-height: 60px;
                ">
                        <span style="--i:1;">We laten er gras over groeien</span> <br>
                        <span style="--i:3;"></span>

                    </h2>
                </div>





                <div class="text-header d-none d-md-none d-lg-flex">
                    <h2 style="color: #fff9f4;
                  font-family: henderson-sans-basic, sans-serif;
                color: #fff;
                 font-size: 39px;
               font-weight: 300;
                line-height: 60px;
                 margin-top:45px;">
                        <span style="--i:1;">We laten er gras</span> <br>
                        <span style="--i:3;">over groeien</span>

                    </h2>
                </div>


                <div class="text">
                    <p></p>
                </div>


                <div class="row pb-lg-5 pb-0">
                    <div class="col-2">
                        <div class="line-left h-100 mt-lg-3 d-none d-lg-flex"></div>
                    </div>
                    <div class="col-lg-9 mt-lg-1 mt-4">

                        <div class="text d-none d-md-none d-lg-flex flex-column align-items-center"
                            style="--height: 400px;">
                            <p class="content1" style="font-weight: 400;">
                                Bij tuinaanleg hoort de volledige
                                aanleg van je tuin.
                                Van grondwerk tot aanleg. We werken
                                hiervoor met hoogwaardige en duurzame materialen, bijvoorbeeld

                                hout met FSC
                                keurmerk. En
                                natuurlijk met veel groen! We ontzorgen je hierbij volledig. Heb je groene
                                vingers en wil je ook
                                zelf aan de slag? Dan maken we samen een plan voor de realisatie van je
                                groene
                                droomtuin.

                            </p>


                        </div>


                        <div class="d-none d-md-none d-lg-flex">
                            <div class=" circle-border">
                                <a href="<?= esc_url(home_url('/advies')); ?>" class="btn btn-primary">Advies nodig?</a>
                            </div>
                        </div>

                    </div>



                    <div class="text d-flex d-md-flex d-lg-none flex-column align-items-center"
                        style="--height: 400px;">
                        <p class="content1" style="font-weight: 400;"> <span>
                                Bij tuinaanleg hoort de volledige
                                aanleg van je tuin.
                                Van grondwerk tot aanleg. We werken
                                hiervoor met hoogwaardige en duurzame materialen, bijvoorbeeld hout met FSC
                                keurmerk. En
                            </span>
                            <span class="more-text d-none d-lg-block">
                                natuurlijk met veel groen! We ontzorgen je hierbij volledig. Heb je groene
                                vingers en wil je ook
                                zelf aan de slag? Dan maken we samen een plan voor de realisatie van je
                                groene
                                droomtuin.
                            </span>
                        </p>

                        <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                            <span class="arrow fas fa-angle-down down-arrow">
                            </span>
                        </a>
                        <div class="d-flex d-md-flex d-lg-none">
                            <div class=" circle-border">
                                <a href="<?= esc_url(home_url('/advies')); ?>" class="btn btn-primary">Advies nodig?</a>
                            </div>
                        </div>
                    </div>



                    <!-- /* Overlay gradient effect and initial hidden state for small and tablet screens */ -->
                    <style>
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
                                background: transparent linear-gradient(0deg, #405f4f, rgba(64, 95, 79, .961) 40%, rgba(64, 95, 79,
                                            0)) 0 0 no-repeat padding-box;
                                pointer-events: none;
                                opacity: 0.9;
                            }

                            .more-text {
                                opacity: 1;
                            }
                        }

                        .up-arrow,
                        .down-arrow {
                            font-size: 24px;
                            color: white;

                        }
                    </style>

                    <!-- Read More Read Less -->
                    <script>
                        $(document).ready(function () {
                            $('.read-more-toggle').click(function (e) {
                                e.preventDefault();
                                const moreText = $(this).prev('.content1').find('.more-text');

                                // Toggle visibility and max-height of the content
                                $(this).prev('.content1').toggleClass('show');
                                moreText.toggleClass('d-none');

                                // Toggle arrow icon
                                if (moreText.hasClass('d-none')) {
                                    $(this).html(
                                        '<span class="arrow fas fa-angle-down down-arrow"></span>'
                                    );
                                } else {
                                    $(this).html(
                                        '<span class="arrow fas fa-angle-up up-arrow"></span>'
                                    );
                                }
                            });
                        });
                    </script>

                </div>
            </div>


            <div class="col-12 col-lg-6 fadeIn" data-side="right" style="margin-top:80px; ;">
                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="22scaled"
                    class="first-img rounded object-fit" style="" />
            </div>
        </div>


        <!-- Second Section -->







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
                                            <?= esc_url(get_template_directory_uri()); ?>/images/flowerdroplets.png"
                                    alt="Groenoverons" class="img1" />
                            </div>
                            <div class="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                    alt="Beautifulpinkflowers" class="img2" />
                            </div>
                            <div class="mt-auto">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/growingtree.png"
                                    alt="Ladybug" class="img3" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Column -->

        </div>

        <!-- Text Section -->
        <div class="order-1 order-md-1 order-lg-2 fadeIn" style="margin-top: 52px;">


            <!--Verticall line On Lg Screen  -->
            <div class="vl3 d-lg-none d-md-none d-block"></div>
            <div class="vl2 d-lg-none d-md-block"></div>

            <div class="text-block py-1">
                <div class="col-lg-7 col-12 mx-auto text-center d-flex flex-column  align-items-center">
                    <h2 style="font-size:36px;
                                                  padding-bottom: 39px; 
                                                color: #fff;
                                               line-height: 55px;
                                               margin-top:20px;">
                        Maar we doen nog veel meer
                    </h2>
                    <div class="">
                        <div class="text d-flex flex-column align-items-center"
                            style="font-size:18px; line-height: 30px; letter-spacing: 2px;">
                            <p class="content1"><span style="font-weight: 400;">Na de beplanting gaan we aan de slag met
                                    de
                                    bestrating, het beregeningssysteem, opslag van regenwater en/of de verlichting.
                                    We nemen dit gelijk mee in het ontwerp, zodat het allemaal mooi op elkaar
                                    aansluit. We werken met lokale partners die ons de materialen leveren. Zo zijn
                                </span>

                                <span class="more-text d-none d-lg-block">

                                    we altijd verzekerd van topkwaliteit én investeren we in duurzame, lokale
                                    samenwerkingen.
                                </span>
                            </p>
                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                <span class="arrow fas fa-angle-down down-arrow">
                                </span>
                            </a>
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
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/beautifulpinkflowers.png"
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









        <div class="bg-leaf">

            <!--Contact Opnemen Section  -->

            <div class="container d-none d-lg-block" style="margin-top:60px;">
                <div class="bottom-text">
                    <div class="row">
                        <div class="col-lg-6  position-relative fadeIn" data-side="left">
                            <div class="grid-bottom">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/herobg.png"
                                    alt="Groenoverons" class="object-fit-cover rounded" style="height:500px;" />

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greenbackground.png"
                                    alt="" class="w-100 h-100 object-fit-cover rounded">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/tuinen6.jpg" alt=""
                                    class="w-100 h-100 object-fit-cover rounded">

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-8 fadeIn" data-side="right">
                            <h2 style="line-height: 49px; letter-spacing: 5px;">Enthousiast?<br> Neem contact op!</h2>
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
                                <div class="circle-border">
                                    <a class="btn btn-primary " href="/contact"
                                        style="padding: 10px 20px; letter-spacing:1px; white-space:nowrap;">Contact
                                        opnemen

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
                class="row fadeIn d-lg-none  d-flex flex-column align-items-left justify-content-start"
                data-side="right">
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
                <div class="button-group col-12 d-flex flex-row  justify-content-start  " style="margin-bottom:70px">
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
</main>

<?php get_footer() ?>