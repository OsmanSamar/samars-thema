<?php get_header() //Template Name: tuinontwerp ?>


<main id="page" class="flex-grow-1">
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


        .bg-leaf {
            background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
            background-size: cover;
            background-repeat: no-repeat;
            background-size: ;
        }

        @media (min-width: 992px) {

            .swiper-container .swiper-pagination {
                display: none;
            }

            .flex-container {
                text-align: left;
            }

            .text-header {
                font-family: 'Inclusive Sans', sans-serif;
                font-size: 60px;

            }

            .text {

                font-size: 24px;

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
            <h1 class=" mb-3">Tuinontwerp</h1>
            <!-- Breadcrumb Links -->
            <div class="d-inline-block"><a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span
                    class="separator"> // </span>
                <span class="last">Onze diensten</span>
                <span class="separator"> // </span>
                <span class="last">Tuinontwerp</span>
            </div>
        </div>

        <div class="row ">

            <div class="col-12 col-lg-6 flex-container   " style="margin-top:80px;">
                <div class="text-header">In goede aarde <span>-</span></div>
                <div class="text">
                    <p>Wij maken een tuinontwerp op basis van jouw wensen. Maar daarbij geven
                        wij ook onze eerlijke
                        mening en kijken we naar de mogelijkheden. Deel je moodboard met ons en vertel wat je graag in
                        je tuin zou willen zien.

                        Tuinontwerp houdt in dat we een schets maken met daarbij een beplantingsplan. In de schets is te
                        zien hoe de opzet van de tuin zal worden: waar komen planten en waar bestrating. En als je de
                        wens hebt voor een veranda, buitenkeuken of waterpartij, komt deze ook terug in de schets. Weten
                        hoe je schets er in het echt uit komt te zien? Het is mogelijk om een 3D-ontwerp te ontvangen
                        van je tuin. </p>
                </div>
                <div class=" circle-border">
                    <a href="#" class="btn btn-primary">Samen aan de slag</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 " style="margin-top:80px; ;">
                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/ontwerptuin.png" alt="ontwerptuin"
                    class="img1" style="height:800px" />
            </div>


            <div class="lin3"></div>
        </div>


        <div class=" ">




            <div class="row">
                <!-- Column Wrapper -->
                <div class="">
                    <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5  ">
                        <!-- py-5 -->
                        <div class="row gx-5">
                            <!-- 1st Column -->

                            <div class="d-none d-md-none d-lg-flex justify-content-center flex-row gap-3  ">
                                <div class="mt-auto mb-5">
                                    <img src="
                                            <?= esc_url(get_template_directory_uri()); ?>/images/58scaled.jpg"
                                        alt="Groenoverons" class="img1" />
                                </div>
                                <div class="">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png"
                                        alt="Beautifulpinkflowers" class="img2" />
                                </div>
                                <div class="mt-auto">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/16scaled.jpg"
                                        alt="Ladybug" class="img3" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Column -->

            </div>

            <!-- Text Section -->
            <div class="order-1 order-md-1 order-lg-2 ">
                <div class="text-block py-1">
                    <div class="col-lg-7 col-12 mx-auto text-center d-flex flex-column  align-items-center">
                        <h2 style="font-size:36px;
                                          padding-bottom: 39px; 
                                        color: #fff;
                                       line-height: 55px;
                                       margin-top:20px;">
                            Van schets naar beplantingsplan
                        </h2>
                        <div class="text2 text-fix">
                            <div class="inner" style="font-size:20px">
                                <p><span style="font-weight: 400;">In het beplantingsplan maken wij een opzet van de
                                        planten die in je tuin komen. We kijken daarbij naar de ligging van de tuin,
                                        kleur, welke planten goed bij elkaar kunnen staan en natuurlijk jouw
                                        smaak.</span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-under"></div>
            <!-- End of textSection -->



            <!-- Swiper On Small Screen -->

            <div class="swiper-container" style="--swiper-pagination-color: #fff">
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

                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                    <!-- <div class="swiper-pagination"></div> -->

                </div>


                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="bg-leaf"></div>
        <div class="bg-leaf">

            <!--Contact Opnemen Section  -->

            <div class="container d-none d-lg-block" style="margin-top:60px;">
                <div class="bottom-text">
                    <div class="row">
                        <div class="col-lg-6  position-relative fadeIn visible" data-side="left">
                            <div class="grid-bottom">

                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/mapofgardendesign.png"
                                    alt="Groenoverons" class="object-fit-cover rounded" style="height:500px;" />

                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/web2.jpg" alt="">
                                <img loading="lazy" class="w-100 h-100 object-fit-cover rounded"
                                    src="<?= esc_url(get_template_directory_uri()); ?>/images/27scaled.jpg" alt="">

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
                            <a class="btn btn-primary " href="/contact" style="padding: 10px 20px; font-size:;">Neem
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