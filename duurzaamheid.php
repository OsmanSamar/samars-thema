<?php get_header() //Template Name: duurzaamheid ?>


<main id="page" class="flex-grow-1">
    <style>
    .responsive-header {
        color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 36px;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;
        letter-spacing: 2px;
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
        .responsive-header {
            font-size: 41px;
        }

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
        .responsive-header {
            font-size: 80px;
            font-weight: 700;
            line-height: 125px;
            letter-spacing: 2px;
        }

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

        .text {

            font-size: 20px;
            margin-top: 30px;
            /* margin-top: 80px; */
            /* margin-bottom: 60px; */
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

            <h1 class="fadeIn  mb-3 responsive-header">
                <?= get_field("main_header") ?>
            </h1>

            <div class="text  d-flex flex-column align-items-center text-center fadeIn  col-lg-6 col-12 "
                style="
            margin-left:50%; margin-right:50%; transform: translate(-50%, -6%); position: relative; font-size: 18px; margin-bottom: 60px; letter-spacing: -1px; line-height: 34px; white-space: normal; font-weight:400;">
                <p class="">
                    <?= get_field("primary_text") ?>
                </p>

            </div>

        </div>

        <div class="row firstcontainer " style="margin-bottom:80px;">

            <div class="col-12 col-lg-6 flex-container fadeIn  " data-side="left" style="margin-top:">
                <div class="d-flex flex-row   d-lg-flex align-items-center justify-content-center gap-1">

                    <div class="text-header d-block d-md-none d-lg-none">
                        <h2 style="color: #fff9f4;
                        font-family: henderson-sans-basic, sans-serif;
                        color: #fff;
                        font-size: 25px;
                        font-weight: 300;
                        line-height: 60px;
                        white-space:nowrap; ">
                            Een
                            duurzame tuin

                        </h2>


                    </div>
                    <div class="text-header d-none d-md-block d-lg-none">
                        <h2
                            style="color: #fff9f4;  font-family: henderson-sans-basic, sans-serif; color: #fff;  font-size: 33px;  font-weight: 300;  line-height: 60px;  white-space:nowrap; ">
                            <?= get_field("left_title") ?>
                        </h2>
                    </div>

                    <div class="text-header d-none d-md-bone d-lg-block "
                        style="margin-bottom:40px; margin-right:40px; white-space:nowrap;">
                        <h2
                            style="color: #fff9f4; font-family: henderson-sans-basic, sans-serif; color: #fff; font-size: 39px; font-weight: 300; line-height: 60px; white-space:nowrap; ">
                            <?= get_field("left_title") ?>
                        </h2>
                    </div>

                    <div class="dienstlinelg d-none  d-md-none  d-lg-flex "></div>

                </div>


                <div class="row pb-lg-5 pb-0">
                    <div class="col-2">
                        <div class="line-left h-100 mt-lg-3 d-none d-md-none d-lg-flex"></div>
                    </div>
                    <div class="col-lg-9  mt-lg-1 mt-4">

                        <div class="text  d-none d-md-none d-lg-flex flex-column align-items-center  ">
                            <p class="content1 ">
                                <?= get_field("left_text") ?>
                            </p>
                            <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                <span class="arrow fas fa-angle-down down-arrow">
                                </span>
                            </a>
                        </div>

                        <div class="d-none d-md-bone d-lg-flex">
                            <div class=" circle-border">
                                <a href="<?= get_field("aan_de_slag_btn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("aan_de_slag_btn")['title'] ?>
                                </a>
                            </div>
                        </div>
                    </div>





                    <div class="text  d-flex d-md-flex d-lg-none flex-column align-items-center  ">
                        <p class="content1 ">
                            <?= get_field("left_text") ?>
                        </p>
                        <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                            <span class="arrow fas fa-angle-down down-arrow">
                            </span>
                        </a>
                        <div class="d-flex d-md-flex d-lg-none">
                            <div class=" circle-border">
                                <a href="<?= get_field("aan_de_slag_btn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("aan_de_slag_btn")['title'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- /* Overlay gradient effect and initial hidden state for small and tablet screens */ -->
                <style>
                @media (max-width: 991px) {
                    .content1 {
                        position: relative;
                        max-height: 130px;
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


                .arrow {
                    font-size: 18px;
                    color: white;
                    transition: transform 0.25s;
                }

                .arrow.down-arrow {
                    transform: rotate(0deg);
                }

                .arrow.up-arrow {
                    transform: rotate(180deg);
                }

                .up-arrow,
                .down-arrow {
                    font-size: 18px;
                    color: white;
                }
                </style>

                <!-- Read More Read Less -->
                <script>
                $(document).ready(function() {
                    $('.read-more-toggle').click(function(e) {
                        e.preventDefault();
                        const moreText = $(this).prev('.content1').find('.more-text');

                        // Toggle visibility and max-height of the content
                        $(this).prev('.content1').toggleClass('show');
                        moreText.toggleClass('d-none');

                        // Toggle rotation class
                        $(this).find('.arrow').toggleClass('up-arrow down-arrow');

                    });
                });
                </script>
            </div>
            <div class="col-12 col-lg-6 fadeIn" data-side="right" style="margin-top:80px; ;">
                <img src="<?= get_field("duurzaamheid_img")['url'] ?>"
                    alt="<?= get_field("duurzaamheid_img")['title'] ?>" class="first-img rounded" />
            </div>

            <div class="lin3"></div>

        </div>

    </div>



    <section class="text-line-button-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-left  d-lg-none order-2">
                    <p style="font-size:31px;">
                        <?= get_field("waarom_groentuinen_text") ?>
                    </p>
                </div>

                <div class="title d-none d-lg-flex align-items-center gap-3">
                    <h2 class="mb-0" style="font-size:32px ">
                        <?= get_field("waarom_groentuinen_text") ?>
                    </h2>
                    <div class="line2 between d-none d-lg-block"></div>

                </div>

                <!-- Testimonials Section on All Screens -->
                <div class="row  text-center2 order-3  fadeIn" style="margin-top: 100px;">
                    <?php
                    foreach (get_field("testimonials_section") as $testimonial) {
                        ?>
                    <div class="col-12 col-lg-4 testimonial">
                        <img src="<?= $testimonial['afbeelding']['url'] ?>"
                            alt=" <?= $testimonial['afbeelding']['alt'] ?>" class="testimonial-img" />

                        <h1>
                            <?= $testimonial["testimonials_section_title"] ?>
                        </h1>

                        <p>
                            <?= $testimonial["testimonials_section_text"] ?>
                        </p>

                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>


    <!-- Contact Information Section on Lg Screen -->
    <div class="container fadeIn">
        <div class="  flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex"
            style="background-color:#2A3F31; border-radius: 50px;  margin-top:40px; margin-bottom:40px; gap-20px; padding:20px ">
            <div class="d-flex justify-content-center justify-content-lg-start">

                <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['title'] ?>"
                    style="width:80px;height:80px" class="object-cover" />
            </div>
            <div class=" text-center text-lg-left"
                style="margin-left:50px; font-size: 30px; font-weight:300; line-height:2px; font-family: 'Henderson Sans-basic', sans-serif;">
                <span>
                    <?= get_field("contact_text") ?>
                </span>
            </div>
            <div class="button-group" style="margin-left:50px">
                <div class="circle-border ">
                    <a href="tel:<?= get_field("tele_contact") ?>"
                        style="padding-left:40px;padding-right:40px;font-size:18px;" class="btn btn-secondary">
                        <?= get_field("tele_contact") ?>
                    </a>
                </div>
                <div class="circle-border">

                    <a href="mailto:<?= get_field("mail_contact") ?>"
                        style="padding-left: 40px;padding-right:40px;font-size:18px;" class="btn btn-primary">
                        <?= get_field("mail_contact") ?>
                    </a>
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
                <h2 style="font-size:38px; padding-bottom:39px; color:#fff; line-height:66px; font-weight:100">
                    <?= get_field("contact_text") ?>
                </h2>
            </div>
            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">
                <div class="circle-border ">
                    <a href="tel:<?= get_field("tele_contact") ?>"
                        style="padding-left:40px;padding-right:40px;font-size:18px;" class="btn btn-secondary">
                        <?= get_field("tele_contact") ?>
                    </a>
                </div>
                <div class="circle-border">
                    <a href="mailto:<?= get_field("mail_contact") ?>"
                        style="padding-left: 40px;padding-right: 40px; font-size:18px;" class="btn btn-primary">
                        <?= get_field("mail_contact") ?>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['title'] ?>"
                    style="width:120px;height:120px;object-fit:cover" />
            </div>
        </div>
    </div>




</main>

<?php get_footer() ?>