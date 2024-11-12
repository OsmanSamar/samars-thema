<?php get_header();
//Template Name: werkwijze ?>

<main class="flex-grow-1">
    <style>
        .bg-leaf {
            background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
            background-size: cover;
            background-repeat: no-repeat;
            /* background-size: 1400px;
        background-position: 47% -28%; */
            background-size: 1200px;
            background-position: 47% 4%;

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
        }
    </style>
    <div class="bg-leaf ">


        <div class="container">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" style="font-size:18px;" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="" style="font-size:16px;">
                    Onze werkwijze</span>
            </div>

            <div class="container bg-img mt-lg-auto mb-0">

                <div class="position-relative fadeIn">
                    <div class=" overlay" style="  border-radius: 10px;"></div>
                    <img src="<?= get_field("werkwijze_bg")['url'] ?>" alt="<?= get_field("werkwijze_bg")['alt'] ?>"
                        class="groentuinen" style="object-fit:cover;" />
                    <div class="content center">
                        <div class=" bottom-center">
                            <h1>
                                <?= get_field("title_on_img") ?>
                            </h1>
                        </div>

                        <div class=" bottom-center " style=" width: ;">
                            <p style=" font-weight: 400; font-family: 'Inclusive Sans' , sans-serif; font-size:;">
                                <?= get_field("text_on_img") ?>
                            </p>
                        </div>

                        <div class=" bottom-center">
                            <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                                <img src="<?= get_field("downarrow")['url'] ?>"
                                    alt="<?= get_field("downarrow")['alt'] ?>" class="downarrow-icon" />
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
                                     text-align: left;">
                                    <?= get_field("first_title_on_sm_screen") ?>
                                </h2>

                                <h2 class=" text-header d-none d-md-block d-lg-block">
                                    <?= get_field("title_text") ?>
                                    <span style="font-weight:100; cursor:pointer;  opacity: .5; width:20px;">-
                                    </span>
                                </h2>
                                <div class=" text d-flex flex-column align-items-center  ">
                                    <p class="content1">
                                        <?= get_field("first_left_text") ?>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down down-arrow">
                                        </span>
                                    </a>
                                </div>

                                <div class=" d-none d-lg-flex " style="margin-top:70px;">
                                    <div class=" circle-border" style="left:calc(var(--bs-gutter-x)* -0.3);">
                                        <a href="<?= get_field("samen_aan_de_slag_btn")['url'] ?>"
                                            class="btn btn-primary"
                                            style=" white-space: nowrap;"><?= get_field("samen_aan_de_slag_btn")['title'] ?>
                                        </a>
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
                            <div class="text d-lg-none d-flex flex-row  align-items-center "
                                style="white-space:no-wrap;">
                                <div class="circle-border">
                                    <a href="<?= get_field("samen_aan_de_slag_btn")['url'] ?>" class="btn btn-primary"
                                        style=" white-space: nowrap;"><?= get_field("samen_aan_de_slag_btn")['title'] ?>
                                    </a>
                                </div>
                                <div class="nline"></div>
                            </div>

                            <div class="">
                                <img src="<?= get_field("ontwerptuin_img")['url'] ?>"
                                    alt="<?= get_field("ontwerptuin_img")['alt'] ?>" class=""
                                    style="object-fit: cover; width:100% ;" />
                            </div>
                            <div class="position-relative">
                                <div class="vl3 d-lg-none d-md-none d-block"></div>
                                <div class="vl2 d-lg-none d-md-block"></div>

                                <h2 class="  d-flex  align-items-center justify-content-center d-md-flex d-lg-none"
                                    style=" font-size: 31px;
                                     margin-bottom:48px;
                                     margin-top:75px;
                                     text-align: center;">

                                    <?= get_field("third_title") ?>
                                </h2>

                                <div class=" d-lg-flex flex-row d-none d-md-none align-items-center justify-content-left gap-3"
                                    style="margin-top:75px">
                                    <h2 class=" text-header ">
                                        <?= get_field("second_title") ?>
                                    </h2>
                                    <div class="line3  d-none d-lg-block "></div>
                                </div>

                                <div class=" d-flex flex-column align-items-center d-md-flex d-lg-none " style="   
                                font-size: 20px;
                                  margin-bottom: 48px;
                                     text-align: center;">
                                    <p class="content1 ">
                                        <?= get_field("second_left_text") ?>
                                    </p>

                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down " style='font-size:24px;color:white'>
                                        </span>
                                    </a>
                                </div>

                                <div class=" text d-flex flex-column align-items-center d-none d-md-none d-lg-flex ">
                                    <p class="content1 ">
                                        <?= get_field("second_left_text") ?>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down " style='font-size:24px;color:white'>
                                        </span>
                                    </a>
                                </div>

                                <div class="d-none d-md-none d-lg-block">
                                    <div class=" circle-border " style="left:calc(var(--bs-gutter-x)* -0.3);">
                                        <a href="<?= get_field("bekijk_onze_projecten_btn")['url'] ?>"
                                            class="btn btn-primary"
                                            style=" white-space: nowrap;"><?= get_field("bekijk_onze_projecten_btn")['title'] ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-block d-md-block d-lg-none">
                                    <div class=" circle-border ">
                                        <a href="<?= get_field("over_duurzaamheid")['url'] ?>" class="btn btn-secondary"
                                            style=" white-space: nowrap;"><?= get_field("over_duurzaamheid")['title'] ?>
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
                                    <img src="<?= get_field("verticalplants_img")['url'] ?>"
                                        alt="<?= get_field("verticalplants_img")['alt'] ?>" class="groenoverons"
                                        style="object-fit:cover; width:100% ;" />
                                </div>

                                <div>
                                    <h2 class="text-header ">
                                        <?= get_field("third_title") ?>
                                    </h2>

                                    <div class="text d-flex flex-column align-items-center">
                                        <p class="content1">
                                            <?= get_field("third_text") ?>
                                        </p>
                                        <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                            <span class="arrow fas fa-angle-down " style='font-size:24px;color:white'>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="circle-border" style="left:calc(var(--bs-gutter-x)* -0.3);">
                                        <a href="<?= get_field("over_duurzaamheid")['url'] ?>" class="btn btn-secondary"
                                            style=" white-space: nowrap;"><?= get_field("over_duurzaamheid")['title'] ?>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <img src="<?= get_field("werkwijzetuin_img")['url'] ?>"
                                        alt="<?= get_field("werkwijzetuin_img")['alt'] ?>" class="groenoverons"
                                        style="object-fit:cover; width:100% ;" />
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
                                     text-align: left;">
                                    <?= get_field("second_title") ?>
                                </h2>

                                <div class="text d-flex flex-column align-items-center justify-content-left">
                                    <p class="content1">
                                        <?= get_field("third_text") ?>
                                    </p>
                                    <a href="#" class="read-more-toggle btn  d-flex  d-lg-none">
                                        <span class="arrow fas fa-angle-down " style='font-size:24px;color:white'>
                                        </span>
                                    </a>
                                </div>
                                <div class="text d-lg-none d-flex flex-row  align-items-center "
                                    style="white-space:no-wrap;">
                                    <div class="circle-border">
                                        <a href="<?= get_field("bekijk_onze_projecten_btn")['url'] ?>"
                                            class="btn btn-primary"
                                            style=" white-space: nowrap;"><?= get_field("bekijk_onze_projecten_btn")['title'] ?>
                                        </a>
                                    </div>
                                    <div class="nline"></div>
                                </div>

                                <div>
                                    <!-- <img src="<?= esc_url(get_template_directory_uri()); ?>/images/werkwijzetuin.png"
                                        alt="Werkwijzetuin" class="" style="object-fit: cover; width:100% ;" /> -->

                                    <img src="<?= get_field("werkwijzetuin_img")['url'] ?>"
                                        alt="<?= get_field("werkwijzetuin_img")['alt'] ?>" class=""
                                        style="object-fit:cover; width:100% ;" />
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
                        <p style="font-size:31px;">
                            <?= get_field("waarom_text") ?>
                        </p>
                    </div>
                    <div class="title d-none d-lg-flex align-items-center gap-3">
                        <h2 class="mb-0" style="font-size:32px ">
                            <?= get_field("waarom_text") ?>
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
        <div class="container fadeIn ">
            <div class="  flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['alt'] ?>"
                        class="groentuinen" style="object-fit:cover;width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; 
                font-size: 30px; 
                font-weight:300; 
                line-height:2px;
                  font-family: 'Henderson Sans-basic', sans-serif;">
                    <span>
                        <?= get_field("samen_aan_de_slag_text") ?>
                    </span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a href="tel:<?= get_field("telefoon_contact") ?>" class="btn btn-secondary"
                            style=" white-space:nowrap;"><?= get_field("telefoon_contact") ?>
                        </a>
                    </div>
                    <div class="circle-border">
                        <a href="mailto:<?= get_field("mail_contact") ?>" class="btn btn-primary"
                            style=" white-space:nowrap;"><?= get_field("mail_contact") ?>
                        </a>
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
                    <?= get_field("samen_aan_de_slag_text") ?>
                </h2>
            </div>

            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">
                <div class="circle-border ">
                    <a href="tel:<?= get_field("telefoon_contact") ?>" class="btn btn-secondary"
                        style=" white-space: nowrap;"><?= get_field("telefoon_contact") ?>
                    </a>
                </div>

                <div class="circle-border">
                    <a href="mailto:<?= get_field("mail_contact") ?>" class="btn btn-primary"
                        style=" white-space: nowrap;"><?= get_field("mail_contact") ?>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['alt'] ?>" class="groentuinen"
                    style="object-fit:cover; width:120px; height:120px;" />
            </div>
        </div>
    </div>





</main>
<?php get_footer() ?>