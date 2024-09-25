<?php get_header() ;
//Template Name: werkwijze?>

<main class="flex-grow-1">
    <style>
    .content {
        position: absolute;
        top: 50%;
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

        .content p {

            font-size: 20px;
            line-height: 35px;

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
    }
    </style>
    <div class="container">

        <div class="d-inline-block">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="last">Werkwijze</span>
        </div>



        <div class="container bg-img mt-lg-auto mb-0">
            <div class="position-relative">
                <div class=" overlay"></div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijze.png" alt="groentuinen"
                    class="groentuinen" style="height:745px" />
                <div class="content center">
                    <div class=" bottom-center">
                        <h1>Onze Werkwijze</h1>

                    </div>
                    <div class=" bottom-center" style=" width: ;">
                        <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif;">We steken onze handen
                            uit de mouwen voor jouw tuin. Of het nu gaat</p>
                        <p>om tuinontwerp,
                            tuinaanleg of het onderhoud van je tuin. Zo wordt jouw</p>
                        <p>tuin geen muurbloempje maar een
                            echte
                            eyecatcher ! Weten hoe we dat aanpakken?</p>

                    </div>
                    <div class=" bottom-center"><a class="down d-lg-none d-block" aria-label="Go to the content"
                            href="#content">

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ontwerptuin.png"
                                alt="downarrow Icon" class="downarrow-icon" style="height:800px" /></a>


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
                            <!--1st Column -->
                            <div class="col-12 col-md-5 col-lg-6 ml-lg-4  ">
                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <span class="text-header ">Hoe wij te werk gaan <span>-</span></span>
                                    <div class="text ">
                                        <p>We plannen altijd een gesprek, waarin jij jouw wensen aan kunt geven.
                                            Je
                                            geeft aan welke stijl je mooi vindt en laat indien mogelijk een
                                            moodboard
                                            zien. We kijken hoe de stijl in je woning is, zodat we deze kunnen
                                            doorvoeren in je tuin. Wij vertellen wat we voor je kunnen betekenen
                                            en
                                            meten je tuin in.


                                        </p>

                                        <div class="circle-border">
                                            <a href="#" class="btn btn-primary">Samen aan de slag</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/ontwerptuin.png"
                                        alt="groenoverons" class="groenoverons" />
                                </div>

                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <span class="text-header ">Ontwerp van jouw tuin <span>-</span></span>
                                    <div class="text ">
                                        <p>Vervolgens gaan we aan de slag met het ontwerp van je tuin. Dit doen
                                            we
                                            op
                                            basis van alle input uit het eerste gesprek. We maken een offerte
                                            voor
                                            het
                                            realiseren van je droomtuin.

                                            We presenteren het ontwerp en bespreken de mogelijkheden en de
                                            kosten
                                            met
                                            je. Zijn we het eens en is de offerte akkoord? Dan spreken we af
                                            wanneer
                                            we
                                            voor je aan de slag gaan.
                                        </p>
                                        <p>

                                        </p>
                                        <div class="circle-border">
                                            <a href="#" class="btn btn-primary">Bekijk onze
                                                projecten</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- 2nd  Column -->
                            <div class="col-12 col-md-5 col-lg-6   mb-4 mb-lg-0">
                                <div class="d-flex flex-column text-center align-items-center ">
                                    <!-- Down Arrow -->
                                    <!-- <a class="down d-lg-flex d-none mb-0" aria-label="Go to the content"
                                        href="#content"> -->


                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                        alt="groenoverons" class="groenoverons" />
                                </div>

                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <span class="text-header ">Wat je krijgt <span>-</span></span>
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
                                        <p>
                                        </p>
                                        <div class="circle-border">
                                            <a href="#" class="btn btn-secondary">Over duurzaamheid</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex flex-column text-center align-items-center ">
                                    <!-- Down Arrow -->
                                    <!-- <a class="down d-lg-flex d-none mb-0" aria-label="Go to the content"
                                        href="#content"> -->


                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                        alt="groenoverons" class="groenoverons" />
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





</main><?php get_footer() ?>