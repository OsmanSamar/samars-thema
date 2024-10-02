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

    .content {
        position: absolute;
        /* top: 50%; */
        top: 82%;
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
        border-radius: 20px;
    }

    .text-header {

        font-size: 31px;

        margin-bottom: 48px;

    }

    .text {
        font-size: 20px;

        margin-bottom: 48px;
    }

    .content h1 {


        font-size: 40px;
        line-height: 70px;
        font-weight: bold;
    }

    .content p {

        font-size: 16px;
        line-height: 20px;

    }

    .down {
        display: inline-block;
        transition: transform 0.3s ease;
        width: 45px;
        cursor: pointer;
    }




    .border-left {
        /* display: none; */

    }


    /*  */
    /* Initially hide the additional text */
    /* .more-text {
        display: none;
    } */

    /* Styling for the toggle arrow */
    /* .read-more-toggle .arrow {
        transition: transform 0.3s;
    } */

    /* Rotate arrow on click */
    /* .read-more-toggle.active .arrow {
        transform: rotate(180deg);
    } */

    /*  */

    @media (min-width: 992px) {

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


        .border-left {
            display: flex;
            height: 100%;
            border-left: 1px solid #ffffff;
            padding-right: 10px;
            /* opacity: .5; */
        }

        /* .nextline {
            opacity: .5;
            border: 1px solid #ffffff;
            width: 53%;
            display: inline-flex;
        } */
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

        }




        .border-left {}
    }
    </style>
    <div class="bg-leaf ">

        <!-- <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="last">Werkwijze</span>
        </div> -->


        <div class="container">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Werkwijze</span>
            </div>

            <div class=" bg-img mt-lg-auto mb-0">
                <!-- Removed container class from bg-img div -->
                <div class="position-relative">
                    <div class=" overlay" style="  border-radius: 20px;"></div>
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijze.png" alt="groentuinen"
                        class="groentuinen" style="height:745px" />
                    <div class="content center">
                        <div class=" bottom-center">
                            <h1>Onze Werkwijze</h1>

                        </div>
                        <div class=" bottom-center" style=" width: ;">
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:20px;">We
                                steken
                                onze
                                handen
                                uit de mouwen voor jouw tuin. Of het nu gaat</p>
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:20px;">om
                                tuinontwerp,
                                tuinaanleg of het onderhoud van je tuin. Zo wordt jouw</p>
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:20px;">
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


        <div class="text-lg-start text-center" id="content">
            <div class="container">
                <div class="row">


                    <!-- Column Wrapper -->
                    <div class=" col-12 col-lg-10 mx-auto mt-5 my-lg-5 py-5">
                        <div class="row gx-5">
                            <!--1st Column -->
                            <div class="col-12 col-md-12 col-lg-6    ">
                                <div class="d-flex flex-column  text-left align-items-start gap-4 ">
                                    <div class="" style="">
                                        <h2 class=" text-header">Hoe wij
                                            te werk gaan
                                            <span style="font-weight:100; cursor:pointer;  opacity: .5; width:20px;">-
                                            </span>
                                        </h2>
                                        <div class=" text d-flex flex-column align-items-center ">

                                            <p class="content1">
                                                We plannen altijd een gesprek, waarin jij jouw wensen aan kunt geven. Je
                                                geeft aan welke stijl je mooi vindt en laat indien mogelijk een
                                                moodboard zien.
                                                We kijken hoe de stijl in je woning is, zodat we deze kunnen doorvoeren
                                                in je tuin. Wij vertellen wat we voor je kunnen betekenen en meten je
                                                tuin in.
                                                <span class="more-text d-none">Vervolgens gaan we aan de slag met het
                                                    ontwerp van je tuin. Dit doen we op basis van alle input uit het
                                                    eerste gesprek.
                                                    We maken een offerte voor het realiseren van je droomtuin.</span>
                                            </p>
                                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrow.svg"
                                                    alt="down arrow" class="arrow-icon down" style="border:none;  ">
                                            </a>


                                        </div>

                                        <div class=" circle-border">
                                            <a href="<?= esc_url(home_url('/contact')); ?>"
                                                class="btn btn-primary">Samen aan de slag</a>
                                        </div>

                                        <script>
                                        $(document).ready(function() {
                                            $('.read-more-toggle').click(function(e) {
                                                e.preventDefault();
                                                var moreText = $(this).prev('.content1').find(
                                                    '.more-text');
                                                var arrowIcon = $(this).find('img.arrow-icon');

                                                // Toggle visibility of additional text
                                                moreText.toggleClass('d-none');

                                                // Toggle arrow icon
                                                if (moreText.hasClass('d-none')) {
                                                    arrowIcon.attr('src',
                                                        '<?= esc_url(get_template_directory_uri()); ?>/images/arrow.svg'
                                                    );
                                                    arrowIcon.attr('alt', 'down arrow');
                                                } else {
                                                    arrowIcon.attr('src',
                                                        '<?= esc_url(get_template_directory_uri()); ?>/images/up-arrow.svg'
                                                    );
                                                    arrowIcon.attr('alt', 'up arrow');
                                                }

                                                // Add or remove active class for arrow animation
                                                $(this).toggleClass('active');
                                            });
                                        });
                                        </script>

                                    </div>


                                    <div class="">
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ontwerptuin.png"
                                            alt="Ontwerptuin" class="" style="object-fit: cover; width:100% ;" />
                                    </div>
                                    <div>


                                        <div class=" d-lg-flex flex-row align-items-center gap-3">
                                            <h2 class="text-header   ">Wat je krijgt</h2>
                                            <div class="line3 between d-none d-lg-inline-flex ">
                                            </div>

                                        </div>

                                        <div class=" text d-flex flex-column align-items-center ">
                                            <p class="content1 ">
                                                Bij GROENtuinen staan we voor duidelijkheid en transparantie. We
                                                ontwerpen
                                                jouw tuin, leggen de tuin aan en/of onderhouden deze voor een
                                                eerlijke
                                                en
                                                vaste prijs. Ook maken we samen afspraken over de planten in je
                                                tuin.<span class="more-text d-none">Zo weet je precies waar je
                                                    aan toe
                                                    bent.</span> </p>
                                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrow.svg"
                                                    alt="down arrow" class="arrow-icon down">
                                            </a>


                                            <div class=" circle-border">
                                                <a href="<?= esc_url(home_url('/projecten')); ?>"
                                                    class="btn btn-primary">Bekijk onze
                                                    projecten</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- Line Betwwen Cols -->

                            <!-- <div class="vl  col-lg-1 order-2 d-none d-lg-flex"> </div> -->

                            <!-- 2nd  Column  mb-4 mb-lg-0-->
                            <!-- <div class="border-left">
                                <div class="col-12 col-md-12 col-lg-6  ">
                                    <div class="d-flex flex-column text-left align-items-start gap-4">



                                        <div>
                                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/verticalplants.png"
                                                alt="Groenoverons" class="" style="object-fit: cover; width:100% ;" />
                                        </div>

                                        <div>
                                            <h2 class="text-header ">Wat je krijgt <span>-</span></h2>
                                            <div class="text ">
                                                <p>Bij GROENtuinen staan we voor duidelijkheid en transparantie. We
                                                    ontwerpen
                                                    jouw tuin, leggen de tuin aan en/of onderhouden deze voor een
                                                    eerlijke
                                                    en
                                                    vaste prijs. Ook maken we samen afspraken over de planten in je
                                                    tuin. Zo
                                                    weet je precies waar je aan toe bent.
                                                </p>

                                                <div class="circle-border">
                                                    <a href="#" class="btn btn-secondary">Over duurzaamheid</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijzetuin.png"
                                                alt="Werkwijzetuin" class="" style="object-fit: cover; width:100% ;" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12 col-md-12 col-lg-6 border-left  ">
                                <div class="d-flex flex-column text-left align-items-start gap-4">



                                    <div>
                                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/verticalplants.png"
                                            alt="Groenoverons" class="" style="object-fit: cover; width:100% ;" />
                                    </div>

                                    <div>
                                        <h2 class="text-header ">Ontwerp van jouw tuin</h2>
                                        <div class="text d-flex flex-column align-items-center">
                                            <p class="content1">Vervolgens gaan we aan de slag met het ontwerp van je
                                                tuin. Dit doen
                                                we
                                                op
                                                basis van alle input uit het eerste gesprek. We maken een offerte
                                                voor
                                                het
                                                realiseren van je droomtuin.

                                                We presenteren het ontwerp en bespreken de mogelijkheden en de
                                                kosten
                                                met
                                                je.<span class="more-text d-none">Zijn we het eens en is de
                                                    offerte akkoord? Dan spreken
                                                    we af
                                                    wanneer
                                                    we
                                                    voor je aan de slag gaan.</span>
                                            </p>
                                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrow.svg"
                                                    alt="down arrow" class="arrow-icon down">
                                            </a>


                                            <div class="circle-border">
                                                <a href="#" class="btn btn-secondary">Over duurzaamheid</a>
                                            </div>
                                        </div>
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
                        <div class="col-12   col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt</span></p>

                        </div>
                        <div class="col-sm-12  col-lg-4 testimonial">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur</span></p>
                        </div>
                        <div class="col-sm-12  col-lg-4 testimonial">
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
                    <div class="col-sm-12  col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Vakkundig maatwerk</h1>
                        <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                gemaakt</span></p>
                    </div>
                    <div class="col-sm-12  col-lg-4 testimonial">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Passie voor groen</h1>
                        <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                natuur</span></p>
                    </div>
                    <div class="col-sm-12  col-lg-4 testimonial">
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

        <div class="container">
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
            class="row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none">


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





</main><?php get_footer() ?>