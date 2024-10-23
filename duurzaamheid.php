<?php get_header() //Template Name: duurzaamheid ?>


<main id="page" class="flex-grow-1">
    <style>
    .line-left {
        background-color: #fff;
        opacity: .5;
        width: 1px;
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
        text-align: center;
    }

    .text {
        font-family: 'Inclusive Sans', sans-serif;
        font-size: 20px;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
        margin-bottom: 34px;
        /* margin-top: 80px; */
    }


    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: ;
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




    @media (min-width: 992px) {



        .dienstlinelg {
            height: 1px;
            width: 169px;
            background-color: #ffffff;
            color: #ffffff;
            position: relative;
            opacity: 0.5;
        }

        .first-img {
            height: 800px
        }



        .flex-container {
            text-align: left;
            margin-top: 80px;
        }

        .text-header {
            font-family: 'Inclusive Sans', sans-serif;
            font-size: 60px;

        }

        /* .text {
            font-size: 18px;
            margin-top: 50px;
            margin-bottom: 60px;
            letter-spacing: 2px;
            line-height: 43px;
            white-space: normal;

        } */


        .text {

            font-size: 24px;
            margin-top: 50px;
            margin-top: 80px;
            margin-bottom: 60px;
        }



        .first-img {
            object-fit: cover;
        }


    }
    </style>
    <div class="container">



        <div class=" d-flex flex-column text-center my-4 ">

            <!-- Breadcrumb Links -->
            <div class="d-inline-block fadeIn" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 45px;
        margin-top:-4px;">

                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span class="separator"> // </span>
                <span class="last">Onze werkwijze</span>
                <span class="separator"> // </span>
                <span class="last">Duurzaamheid</span>
            </div>

            <h1 class="fadeIn d-block d-md-none d-lg-none mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 40px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;
        letter-spacing:2px;">Duurzaamheid
            </h1>

            <h1 class="fadeIn d-none d-md-block d-lg-block mb-3" style="color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 80px;
        font-weight: 700;
        line-height: 125px;
        letter-spacing:2px;
       
        ">Duurzaamheid
            </h1>

            <div class="text  d-flex flex-column align-items-center text-center fadeIn  col-lg-6 col-12  " style="margin-left:50%;
            margin-right:50%;
    transform: translate(-50%, -6%);
    position: relative;
    font-size: 18px;
            margin-top: 50px;
            margin-bottom: 60px;
            letter-spacing: -1px;
            line-height: 34px;
            white-space: normal;
            font-weight:400;
    
    ">
                <p class="">Een duurzame tuin is een tuin waarin jij volop kunt genieten van groen én waar de
                    natuur ook van profiteert. Door van je duurzame tuin een huis voor insecten en andere dieren te
                    maken. En door te kiezen voor duurzame materialen die lang mee gaan.
                    </span>
                </p>

            </div>

        </div>

        <div class="row firstcontainer " style="margin-bottom:80px;">

            <div class="col-12 col-lg-6 flex-container fadeIn  " data-side="left" style="margin-top:">
                <div class="d-flex flex-row   d-lg-flex align-items-center justify-content-center gap-1">

                    <div class="text-header" style="margin-bottom:40px; margin-right:40px; white-space:nowrap;">Een
                        duurzame tuin</div>
                    <div class="dienstlinelg d-none  d-md-none  d-lg-flex "></div>

                </div>


                <div class="row pb-lg-5 pb-0">
                    <div class="col-2">
                        <div class="line-left h-100 mt-lg-3 d-none d-md-none d-lg-flex"></div>
                    </div>
                    <div class="col-lg-9  mt-lg-1 mt-4">

                        <div class="text  d-flex flex-column align-items-center  ">
                            <p class="content1 ">Wij maken van je buitenruimte een duurzame tuin door volop te variëren
                                met bloemen, planten en bomen. Bijen, vlinders en andere dieren en insecten kunnen zo
                                volop meegenieten van je tuin. En
                                <span class="more-text d-none"> jij hebt het hele jaar door een bloeiende tuin.
                                    Voor de tuinaanleg gebruiken we duurzame materialen (hout met FSC keurmerk) en
                                    kiezen we voor zo min mogelijk bestrating. Regenwater wordt zo mogelijk opgevangen
                                    en teruggegeven aan de natuur. En het allerbelangrijkste: we planten volop groen in
                                    je tuin!
                                </span>
                            </p>
                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                <span class="arrow fas fa-angle-down down-arrow">
                                </span>
                            </a>
                        </div>

                        <div class=" circle-border">
                            <a href="<?= esc_url(home_url('/advies')); ?>" class="btn btn-primary">Samen aan de
                                slag?</a>
                        </div>
                    </div>
                </div>

                <style>
                .down-arrow {
                    font-size: 24px;
                    color: white;
                }

                .up-arrow {
                    font-size: 24px;
                    color: white;

                }
                </style>

                <!-- Read More Read Less -->
                <script>
                $(document).ready(function() {
                    $('.read-more-toggle').click(function(e) {
                        e.preventDefault();
                        var moreText = $(this).prev('.content1').find(
                            '.more-text');


                        // Toggle visibility of additional text
                        moreText.toggleClass('d-none');


                        // Toggle arrow icon
                        if (moreText.hasClass('d-none')) {
                            $(this).html(
                                '<span class="arrow fas fa-angle-down down-arrow"></span>'
                            );
                        } else {
                            $(this).html(
                                '<span class="arrow fas fa-angle-up up-arrow" > </span>'
                            );
                        }

                        // Add or remove active class for arrow animation
                        $(this).toggleClass('active');
                    });
                });
                </script>
            </div>


            <div class="col-12 col-lg-6 fadeIn" data-side="right" style="margin-top:80px; ;">
                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/greenleaves.png" alt="ontwerptuin"
                    class="first-img" style="" />
            </div>


            <div class="lin3"></div>
        </div>


        <!-- New Section after the text section -->
        <section class="text-line-button-section">
            <div class="container">
                <div class="row align-items-center">

                    <!-- <div class="  col-lg-2 text-center d-lg-none order-1">
                        <div class="horizontal-divider"></div>
                    </div> -->
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
                        <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: 75ms;">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                                class="testimonial-img" />
                            <h1>Vakkundig maatwerk</h1>
                            <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                    gemaakt</span></p>

                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: 0.15s;">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                                class="testimonial-img w-84 h-126" />
                            <h1>Passie voor groen</h1>
                            <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                    natuur</span></p>
                        </div>
                        <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: .225s;">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group148.svg" alt=""
                                class="testimonial-img" />
                            <h1>Écht out of the box</h1>
                            <p><span style="font-weight: 400;">Laat jouw tuin opvallen met een uniek ontwerp en
                                    aanleg</span></p>
                        </div>
                    </div>



                </div>



                <!-- Testimonials Section on Large Screen -->
                <div class="row testimonials-section d-none d-md-flex ">
                    <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: 75ms;">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group144.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Vakkundig maatwerk</h1>
                        <p><span style="font-weight: 400;">Van ontwerp tot aanleg: jouw tuin wordt op maat
                                gemaakt</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: 0.15s;">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/group146.svg" alt=""
                            class="testimonial-img  w-84 h-126" />
                        <h1>Passie voor groen</h1>
                        <p><span style="font-weight: 400;">Want groen zorgt voor meer geluk bij mensen én de
                                natuur</span></p>
                    </div>
                    <div class="col-sm-12 col-lg-4 testimonial fadeIn" style="transition-delay: .225s;">
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

        <div class="container fadeIn">
            <div class="  flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex" style="background-color:#2A3F31; 
                border-radius: 50px; 
                margin-top:40px; margin-bottom:40px;
                gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; font-size: 30px;
                    font-weight:300; line-height:2px;
                          font-family: 'Henderson Sans-basic', sans-serif;">
                    <span>Ook een GROENtuin? Neem contact op!</span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a class="btn btn-secondary" aria-label="telefoon Contact" href="tel:+31621830806"
                            style="padding-left: 40px;padding-right: 40px; font-size:18px;"> +31
                            6
                            21830806</a>
                    </div>
                    <div class="circle-border">
                        <a class="btn btn-primary" aria-label="Mail Contact" href="mailto:info@groentuinen.nl"
                            style="padding-left: 40px;padding-right: 40px; font-size:18px;">info@groentuinen.nl</a>
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




</main>

<?php get_footer() ?>