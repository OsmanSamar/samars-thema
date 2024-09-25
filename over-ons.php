<?php get_header();
//Template Name: over ons
?>

<main class="flex-grow-1">
    <style>
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

    .bg-img .groentuinen {
        /* width: 100%; */
        /* height: 52vh;
        border-radius: 15px; */
    }

    .groentuinen {
        display: block;
        /* width: 100%;
        height: auto; */
    }

    .content {
        position: absolute;
        top: 100%;
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



    /* .content {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .bottom-center {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
    } */

    .content h1 {

        margin-bottom: 338px;
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


    .groenoverons {
        height: 650px;
        width: 325px;
    }

    /* h2 {
        font-family: 'Henderson Sans Basic', sans-serif;

    } */
    h2 {
        color: #fff;
        font-size: 39px;
        font-weight: 300;
        line-height: 60px;
    }

    @media (min-width: 992px) {

        /* Hide arrow on large screens */
        .down {
            display: none;
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

            width: 626px;
            height: 377px;
        }

        .img2 {
            border-radius: 10px;

            width: 370px;
            height: 591px;
        }

        .img3 {
            border-radius: 10px;
            width: 626px;
            height: 382px;
        }

        .img3,
        .img1,
        .img2,
        .groentuinen {
            object-fit: cover;
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
        font-family: 'Inclusive Sans', sans-serif;
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

    <div class="container">

        <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> // </span><span class="last">Over ons</span>



        <div class="container bg-img mt-lg-auto mb-0">
            <div class="position-relative">
                <div class=" overlay"></div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/overons.png" alt="groentuinen"
                    class="groentuinen" style="height:745px" />


                <div class="content center">
                    <div class=" bottom-center">
                        <h1>Expert in groen en duurzaam</h1>
                    </div>
                    <div class=" bottom-center">
                        <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" />
                        </a>
                    </div>
                </div>
            </div>


        </div>





        <div class="text-lg-start text-center" id="content">
            <div class="container">
                <div class="row">
                    <!-- Column Wrapper -->
                    <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5 py-5">
                        <div class="row gx-5">


                            <!-- 1st Column -->
                            <div class="col-12 col-md-5 col-lg-5 order-2 order-lg-1 mb-4 mb-lg-0">
                                <div class="d-flex flex-column text-center align-items-center ">
                                    <!-- Down Arrow -->
                                    <!-- <a class="down d-lg-flex d-none mb-0" aria-label="Go to the content"
                                        href="#content"> -->


                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                        alt="groenoverons" class="groenoverons" />
                                </div>
                            </div>
                            <!--2nd Column -->
                            <div class="col-12 col-md-5 col-lg-7 ml-lg-4 order-1 order-lg-2 ">
                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <span class="text-header ">Vakkundig maatwerk <span>-</span></span>
                                    <div class="text ">
                                        <p>Het mooiste aan het hoveniersvak? Voor Peter, het gezicht achter
                                            GROENtuinen,
                                            is dat
                                            met duurzame materialen een groene tuin creëren die precies past bij de
                                            wensen van
                                            de klant. Vol met groen, want van groen worden mensen én de natuur blij!
                                        </p>
                                        <p>Wat ooit begon als een vakantiebaantje bij een hoveniersbedrijf, groeide
                                            uit
                                            tot een
                                            passie voor het vak. Peter is tuinontwerper en all

                                        </p>
                                        <div class="circle-border">
                                            <a href="#" class="btn btn-primary">kennismaken?</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3 -->

        <div class=" ">




            <div class="row">
                <!-- Column Wrapper -->
                <div class="">
                    <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5 py-5 ">
                        <div class="row gx-5">
                            <!-- 1st Column -->

                            <div class="d-none d-md-flex justify-content-center flex-row gap-4  ">
                                <div class="mt-auto mb-5">
                                    <img src="
                                            <?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                        alt="groenoverons" class="img1" />
                                </div>
                                <div class="">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/beautifulpinkflowers.png"
                                        alt="groenoverons" class="img2" />
                                </div>
                                <div class="mt-auto">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ladybug.png"
                                        alt="groediverons" class="img3" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Column -->

            </div>

            <!-- Text -->
            <div class="order-1 order-lg-2 ">
                <div class="text-block py-1">
                    <div class="col-lg-7 col-12 mx-auto text-center d-flex flex-column  align-items-center">
                        <h2 style="font-size:px">Laat jouw tuin
                            opvallen
                        </h2>
                        <div class="text2 text-fix">
                            <div class="inner" style="font-size:20px">
                                <p><span style="font-weight: 400;">De favoriete bomen en planten van Peter? Een
                                        prachtige meerstammige steeneik, vrouwenmantel (Alchemilla mollis), witte
                                        knoop (Anaphalis) en de dropplant (Agastache). Maar voor het ontwerp en de
                                        aanleg van jouw tuin, staan jouw wensen voorop. Of het nu gaat om de aanleg
                                        van je voortuin, achtertuin, stadstuin of dakterras.</span></p>
                            </div>
                            <div class="read-more"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of textSection -->



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

        <!-- New Section after the text section -->
        <section class="text-line-button-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="  col-lg-2 text-center d-lg-none order-1">
                        <div class="horizontal-divider"></div>
                    </div>
                    <div class="col-lg-5 text-left  d-lg-none order-2">
                        <p>Waarom GroenTuinen?</p>
                    </div>



                    <div class="title d-none d-lg-flex align-items-center gap-3">
                        <h2 class="mb-0" style="font-size:40px ">Waarom
                            GROENtuinen?</h2>
                        <div class="line2 between d-none d-lg-block"></div>

                    </div>


                    <!-- Testimonials Section on Small Screen -->
                    <div class="row testimonials-section-sm d-md-none text-center2">
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt</span></p>

                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur</span></p>
                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                                class="testimonial-img" />
                            <h1>Écht out of the box</h1>
                            <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                    aanleg</span></p>
                        </div>
                    </div>



                </div>



                <!-- Testimonials Section on Large Screen -->
                <div class="row testimonials-section d-none d-md-flex">
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Vakkundig maatwerk</h1>
                        <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                gemaakt</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Passie voor groen</h1>
                        <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                natuur</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                            class="testimonial-img  " />
                        <h1>Écht out of the box</h1>
                        <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                aanleg</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Information Section on Lg Screen -->

        <div>
            <div class="  flex-lg-row  d-flex flex-column align-items-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; font-size: 30px;">
                    <span>Ook een GROENtuin? Neem contact op!</span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a class="btn btn-secondary" aria-label="telefoon Contact" href="tel:+31621830806"
                            style="padding-left: 40px;padding-right: 40px"> +31
                            6
                            21830806</a>
                    </div>
                    <div class="circle-border">
                        <a class="btn btn-primary" aria-label="Mail Contact" href="mailto:info@groentuinen.nl"
                            style="padding-left: 40px;padding-right: 40px">info@groentuinen.nl</a>
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
                <h2 style="font-size:40px; padding-bottom: 40px; color: #fff;
        line-height: 50px;     font-family: henderson-sans-basic, sans-serif;">Ook een GROENtuin? Neem contact op!</h2>
            </div>
            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">
                <div class="circle-border ">
                    <a class="btn btn-secondary" aria-label="telefoon Contact" href="tel:+31621830806">+31 6
                        21830806</a>
                </div>
                <div class="circle-border">
                    <a class="btn btn-primary" aria-label="Mail Contact"
                        href="mailto:info@groentuinen.nl">info@groentuinen.nl</a>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                    class="groentuinen" style="width:90px; height:90px" />
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