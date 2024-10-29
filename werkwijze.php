<?php get_header();
//Template Name: werkwijze ?>

<main class="flex-grow-1">
    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1600px;
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

    .content {
        position: absolute;
        top: 62%;
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

    .groentuinen {
        display: block;
        object-fit: cover;
        border-radius: 10px;
        width: 100%;
        height: 63vh
    }

    .text {
        font-size: 20px;
        margin-bottom: 48px;
        text-align: left;
    }


    .nline {
        border: 1px solid #ffffff;
        opacity: 0.3;
        width: 1308px;
        height: 1px;
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

    }




    .line-left {
        background-color: #fff;
        opacity: .5;
        width: 1px;
    }

    .flex-container {
        text-align: center;
    }



    .text-header {
        font-size: 31px;
        margin-bottom: 48px;
    }

    .text {
        font-size: 20px;
        margin-bottom: 48px;
        text-align: left;
    }

    .content h1 {
        font-size: 24px;
        line-height: 70px;
        font-weight: bold;
    }

    .content p {

        font-size: 15px;
        line-height: 20px;

    }

    .down {
        display: inline-block;
        transition: transform 0.3s ease;
        width: 45px;
        cursor: pointer;
    }

    .groenoverons {
        width: 100%;
        /* height: 823px; */
        object-fit: cover;
        border-radius: 10px;
    }




    /* MD Screens */
    @media (min-width: 768px) {

        .content {
            position: absolute;
            /* top: 50%; */
            top: 73%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            color: white;
        }


        .groentuinen {
            display: block;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
            height: 34vh
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


    @media (min-width: 992px) {

        .groentuinen {
            display: block;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
            height: 566px;
        }


        /* Hide arrow on large screens */
        .down {
            display: none;
        }

        .content {
            position: absolute;
            top: 50%;
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

        .content p {

            font-size: 20px;
            line-height: 35px;

        }

        .groenoverons {
            height: 722px;
            width: 511px;
        }




        .flex-container {
            text-align: left;
        }
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

        .line3 {
            height: 1px;
            width: 50%;
            background-color: #ffffff;
            color: #ffffff;
            margin-bottom: 48px;
            opacity: 0.5;

        }




        .border-left {}
    }
    </style>
    <div class="bg-leaf ">




        <div class="container">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" style="font-size:18px;" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="" style="font-size:16px;">Onze werkwijze</span>

            </div>

            <div class="  container bg-img mt-lg-auto mb-0">

                <div class="position-relative fadeIn">
                    <div class=" overlay" style="  border-radius: 10px;"></div>
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijze.png" alt="groentuinen"
                        class="groentuinen" style="" />
                    <div class="content center">
                        <div class=" bottom-center">
                            <h1>Onze werkwijze</h1>

                        </div>



                        <div class=" bottom-center " style=" width: ;">
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:;">We
                                steken
                                onze
                                handen
                                uit de mouwen voor jouw tuin. Of het nu gaat</p>
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:;">om
                                tuinontwerp,
                                tuinaanleg of het onderhoud van je tuin. Zo wordt jouw</p>
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:;">
                                tuin
                                geen muurbloempje maar een
                                echte
                                eyecatcher ! Weten hoe we dat aanpakken?</p>
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
        </div>


        <div class="text-lg-start text-center " id="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5 mx-auto mt-5 my-lg-5 py-5 fadeIn" data-side="left">
                        <div class="d-flex flex-column  text-left align-items-start gap-4 ">
                            <div class="" style="">
                                <h2 class=" text-header d-flex align-items-left d-md-none d-lg-none" style=" font-size: 31px;
                                     margin-bottom: 48px;
                                     text-align: left;">Hoe wij
                                    te<br> werk gaan

                                </h2>
                                <h2 class=" text-header d-none d-md-block d-lg-block">Hoe wij
                                    te werk gaan
                                    <span style="font-weight:100; cursor:pointer;  opacity: .5; width:20px;">-
                                    </span>
                                </h2>
                                <div class=" text d-flex flex-column align-items-center  ">
                                    <p class="content1">
                                        We plannen altijd een gesprek, waarin jij jouw wensen aan kunt geven. Je
                                        geeft aan welke stijl je mooi vindt en laat indien mogelijk een
                                        moodboard zien.
                                        We kijken hoe de stijl in je woning is, zodat we deze kunnen doorvoeren
                                        in je tuin. Wij vertellen wat we voor je kunnen betekenen en meten je
                                        tuin in.
                                        <span class="more-text d-none d-lg-block">Vervolgens gaan we aan de slag met het
                                            ontwerp van je tuin. Dit doen we op basis van alle input uit het
                                            eerste gesprek.
                                            We maken een offerte voor het realiseren van je droomtuin.</span>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down down-arrow">
                                        </span>
                                    </a>
                                </div>

                                <div class=" d-none d-lg-flex " style="margin-top:70px;">
                                    <div class=" circle-border">
                                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Samen
                                            aan de
                                            slag</a>
                                    </div>
                                </div>

                                <style>
                                /* Overlay gradient effect and initial hidden state for small and tablet screens */
                                @media (max-width: 991px) {
                                    .content1 {
                                        position: relative;
                                        max-height: 160px;
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

                                .up-arrow,
                                .down-arrow {
                                    font-size: 24px;
                                    color: white;

                                }
                                </style>



                                <script>
                                $(document).ready(function() {
                                    $('.read-more-toggle').click(function(e) {
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
                            <div class="text d-lg-none d-flex flex-row  align-items-center "
                                style="white-space:no-wrap;">
                                <div class="circle-border">
                                    <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                                        style="padding-left:;padding-right: ; font-size:18px;">Samen aan de
                                        slag</a>
                                </div>
                                <div class="nline"></div>
                            </div>


                            <div class="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ontwerptuin.png"
                                    alt="Ontwerptuin" class="" style="object-fit: cover; width:100% ;" />
                            </div>
                            <div class="position-relative">


                                <div class="vl3 d-lg-none d-md-none d-block"></div>
                                <div class="vl2 d-lg-none d-md-block"></div>

                                <h2 class="  d-flex  align-items-center justify-content-center d-md-flex d-lg-none"
                                    style=" font-size: 31px;
                                     margin-bottom:48px;
                                     margin-top:75px;
                                     text-align: center;">Ontwerp van
                                    jouw tuin

                                </h2>

                                <div class=" d-lg-flex flex-row d-none d-md-none align-items-center justify-content-left gap-3"
                                    style="margin-top:75px">

                                    <h2 class=" text-header ">Wat je krijgt</h2>
                                    <div class="line3  d-none d-lg-block "></div>
                                </div>


                                <div class=" d-flex flex-column align-items-center d-md-flex d-lg-none " style="   
                                font-size: 20px;
                                  margin-bottom: 48px;
                                     text-align: center;">
                                    <p class="content1 ">
                                        Bij GROENtuinen staan we voor duidelijkheid en transparantie. We
                                        ontwerpen
                                        jouw tuin, leggen de tuin aan en/of onderhouden deze voor een
                                        eerlijke
                                        en
                                        vaste prijs. Ook maken we samen afspraken over de planten in je
                                        tuin.<span class="more-text d-none d-lg-block">Zo weet je precies waar je
                                            aan toe
                                            bent.</span> </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">

                                        <span class="arrow fas fa-angle-down "
                                            style='font-size:24px;color:white'></span>
                                    </a>
                                </div>

                                <div class=" text d-flex flex-column align-items-center d-none d-md-none d-lg-flex ">
                                    <p class="content1 ">
                                        Bij GROENtuinen staan we voor duidelijkheid en transparantie. We
                                        ontwerpen
                                        jouw tuin, leggen de tuin aan en/of onderhouden deze voor een
                                        eerlijke
                                        en
                                        vaste prijs. Ook maken we samen afspraken over de planten in je
                                        tuin.<span class="more-text d-none d-lg-block">Zo weet je precies waar je
                                            aan toe
                                            bent.</span> </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">

                                        <span class="arrow fas fa-angle-down "
                                            style='font-size:24px;color:white'></span>
                                    </a>
                                </div>

                                <div class="d-none d-md-none d-lg-block">
                                    <div class=" circle-border ">
                                        <a href="<?= esc_url(home_url('/projecten')); ?>" class="btn btn-primary">Bekijk
                                            onze projecten
                                        </a>
                                    </div>
                                </div>
                                <div class="d-block d-md-block d-lg-none">
                                    <div class=" circle-border ">
                                        <a href="<?= esc_url(home_url('/duurzaamheid')); ?>"
                                            class="btn btn-secondary">Over
                                            duurzaamheid

                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Left Coulumn -->
                    <div class="d-none d-md-none d-lg-flex col-lg-6  mx-auto mt-5 my-lg-5 py-5  flex-container">
                        <div class="row pb-lg-5 pb-0">
                            <div class="col-2">
                                <div class="line-left h-100 mt-lg-3 d-none d-lg-flex"></div>
                            </div>

                            <div class="d-flex flex-column text-left align-items-start gap-4   col-lg-9  mt-lg-1 mt-1  fadeIn "
                                data-side="right">


                                <div>
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/verticalplants.png"
                                        alt="Groenoverons" class="groenoverons"
                                        style="object-fit: cover; width:100% ;" />
                                </div>

                                <div>
                                    <h2 class="text-header ">Ontwerp van jouw tuin</h2>




                                    </h2>
                                    <div class="text d-flex flex-column align-items-center">
                                        <p class="content1">Vervolgens gaan we aan de slag met het ontwerp
                                            van
                                            je
                                            tuin. Dit doen
                                            we
                                            op
                                            basis van alle input uit het eerste gesprek. We maken een
                                            offerte
                                            voor
                                            het
                                            realiseren van je droomtuin.

                                            We presenteren het ontwerp en bespreken de mogelijkheden en de
                                            kosten
                                            met
                                            je.<span class="more-text d-none d-lg-block">Zijn we het eens en is de
                                                offerte akkoord? Dan spreken
                                                we af
                                                wanneer
                                                we
                                                voor je aan de slag gaan.</span>
                                        </p>
                                        <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">

                                            <span class="arrow fas fa-angle-down "
                                                style='font-size:24px;color:white'></span>
                                        </a>
                                    </div>

                                    <div class="circle-border">
                                        <a href="/duurzaamheid" class="btn btn-secondary">Over duurzaamheid</a>
                                    </div>
                                </div>



                                <div>
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijzetuin.png"
                                        alt="Werkwijzetuin" class="" style="object-fit: cover; width:100% ;" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- On Small Screen And Md Screen -->



                    <div class="col-12 col-md-12 d-lg-none  mx-auto mt-5 my-lg-5 py-5  flex-container">
                        <div class="row pb-lg-5 pb-0">


                            <div class="d-flex flex-column text-left align-items-start gap-4 mt-lg-1 mt-1">

                                <h2 class=" text-header d-flex align-items-left d-md-flex d-lg-none" style=" font-size: 31px;
                                     margin-bottom: 48px;
                                     text-align: left;">Wat je krijgt


                                </h2>

                                <div class="text d-flex flex-column align-items-center justify-content-left">
                                    <p class="content1">Vervolgens gaan we aan de slag met het ontwerp
                                        van
                                        je
                                        tuin. Dit doen
                                        we
                                        op
                                        basis van alle input uit het eerste gesprek. We maken een
                                        offerte
                                        voor
                                        het
                                        realiseren van je droomtuin.

                                        We presenteren het ontwerp en bespreken de mogelijkheden en de
                                        kosten
                                        met
                                        je.<span class="more-text d-none d-lg-block">Zijn we het eens en is de
                                            offerte akkoord? Dan spreken
                                            we af
                                            wanneer
                                            we
                                            voor je aan de slag gaan.</span>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">

                                        <span class="arrow fas fa-angle-down "
                                            style='font-size:24px;color:white'></span>
                                    </a>
                                </div>



                                <div class="text d-lg-none d-flex flex-row  align-items-center "
                                    style="white-space:no-wrap;">
                                    <div class="circle-border">
                                        <a href="<?= esc_url(home_url('/projecten')); ?>" class="btn btn-primary"
                                            style="padding-left:;padding-right: ; font-size:18px;">Bekijk onze projecten
                                        </a>
                                    </div>
                                    <div class="nline"></div>
                                </div>

                                <div>
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijzetuin.png"
                                        alt="Werkwijzetuin" class="" style="object-fit: cover; width:100% ;" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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
                        <p style="font-size:31px;">Waarom GroenTuinen?</p>
                    </div>
                    <div class="title d-none d-lg-flex align-items-center gap-3">
                        <h2 class="mb-0" style="font-size:32px ">Waarom
                            GROENtuinen?</h2>
                        <div class="line2 between d-none d-lg-block"></div>
                    </div>


                    <!-- Testimonials Section on Small Screen -->
                    <div class="row testimonials-section-sm d-md-none text-center2">
                        <div class="col-12   col-lg-4 testimonial  fadeIn">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt
                                </span>
                            </p>
                        </div>

                        <div class="col-12  col-lg-4 testimonial fadeIn ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur
                                </span>
                            </p>
                        </div>
                        <div class="col-12  col-lg-4 testimonial fadeIn ">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                                class="testimonial-img" />
                            <h1>Écht out of the box</h1>
                            <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                    aanleg
                                </span>
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Testimonials Section on Large Screen -->
                <div class="row testimonials-section d-none d-md-flex  ">
                    <div class="col-12  col-lg-4 testimonial fadeIn ">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Vakkundig maatwerk</h1>
                        <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                gemaakt
                            </span>
                        </p>
                    </div>
                    <div class="col-sm-12   col-lg-4 testimonial fadeIn ">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Passie voor groen</h1>
                        <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                natuur
                            </span>
                        </p>
                    </div>
                    <div class="col-sm-12   col-lg-4 testimonial fadeIn ">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                            class="testimonial-img  " />
                        <h1>Écht out of the box</h1>
                        <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                aanleg
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Contact Information Section on Lg Screen -->
        <div class="container fadeIn ">
            <div class="  flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; 
                font-size: 30px; 
                font-weight:300; 
                line-height:2px;
                  font-family: 'Henderson Sans-basic', sans-serif;">


                    <span>Samen met ons aan de slag? Neem contact op!</span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a class="btn btn-secondary" aria-label="telefoon Contact" href="tel:+31621830806"
                            style="padding-left: 20px;padding-right: 20px;font-size:18px;"> +31
                            6
                            21830806</a>
                    </div>
                    <div class="circle-border">
                        <a class="btn btn-primary" aria-label="Mail Contact" href="mailto:info@groentuinen.nl"
                            style="padding-left: 30px;padding-right: 20px;font-size:18px;">info@groentuinen.nl</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Contact Information Section on Sm Screen -->
    <div>

        <div style="background-color:#2A3F31; margin-top:40px; gap-20px; padding:20px "
            class="row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none fadeIn ">
            <div class="col-12 col-lg-4 text-center text-lg-left" style="margin-top:20px; ">
                <h2 style="font-size:36px;
                padding-bottom: 39px; 
                color: #fff;
                line-height: 55px;">
                    Samen met ons aan de slag? Neem contact
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
                        href="mailto:info@groentuinen.nl">info@groentuinen.nl
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                    class="groentuinen" style="width:120px; height:120px;  object-fit: cover;" />
            </div>
        </div>
    </div>





</main>
<?php get_footer() ?>