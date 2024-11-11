<?php get_header() //Template Name: 404 ?>


<main id="page" class="404">
    <style>
    .img-container {
        position: relative;
        text-align: center;
        color: white;
    }

    .error-img {
        width: 100%;
        /* Limits the image width on large screens */
        max-width: 600px;
        height: auto;
    }

    .top {
        position: absolute;
        /* top: 240px; */
        top: 15%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* Responsive font size based on viewport width */
        font-size: 9vw;
    }



    .centered {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5vw;
    }

    .bottom {
        position: absolute;
        top: 70%;
        left: 52%;
        transform: translate(-50%, -50%);
    }


    /* Smaller screens */
    @media (max-width: 768px) {
        .top {
            font-size: 12vw;
        }

        .centered {
            font-size: 7vw;
        }

        .bottom .btn {
            font-size: 16px;
            padding: 10px 20px;
        }
    }

    /* Very small screens */
    @media (max-width: 480px) {
        .top {
            font-size: 14vw;
            top: 20%;
        }

        .centered {
            font-size: 8vw;
            top: 45%;
        }

        .bottom .btn {
            font-size: 14px;
            padding: 8px 15px;
        }
    }
    </style>
    <div class="container">


        <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="last">404</span>
        </div>

        <div class="d-flex clo-12 col-lg-12 align-items-center justify-content-center img-container">


            <div>
                <img src="<?= get_field("404_img")['url'] ?>" alt="<?= get_field("404_img")['title'] ?>"
                    class="error-img" />

                <div class="top">
                    <?= get_field("top_text") ?>

                </div>
                <div class="centered">
                    <?= get_field("centered_text") ?>
                </div>
                <div class=" bottom d-flex d-lg-flex">
                    <div class="circle-border">
                        <a href="<?= get_field("home_page_btn")['url'] ?>"
                            style="padding-left:55px;padding-right:55px; font-size:18px;" class="btn btn-primary">
                            <?= get_field("home_page_btn")['title'] ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Contact Information Section on Lg Screen -->

        <div>
            <div class="  flex-lg-row  d-flex flex-column align-items-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= get_field("contact_img")['url'] ?>" alt="<?= get_field("contact_img")['title'] ?>"
                        style="width:80px;height:80px;object-fit:cover" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; font-size: 30px;">
                    <span>
                        <?= get_field("contact_text") ?>
                    </span>
                </div>
                <div class="button-group" style="margin-left:50px">
                    <div class="circle-border ">
                        <a href="tel:<?= get_field("contact_tele") ?>" style="padding-left:40px;padding-right:40px"
                            class="btn btn-secondary">
                            <?= get_field("contact_tele") ?>
                        </a>
                    </div>
                    <div class="circle-border">
                        <a href="mailto:<?= get_field("contact_mail") ?>" style="padding-left:40px;padding-right:40px"
                            class="btn btn-primary">
                            <?= get_field("contact_mail") ?>
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
                    <a href="tel:<?= get_field("contact_tele") ?>"
                        style="padding-left:40px;padding-right:40px;font-size:18px;" class="btn btn-secondary">
                        <?= get_field("contact_tele") ?>
                    </a>
                </div>
                <div class="circle-border">
                    <a href="mailto:<?= get_field("contact_mail") ?>"
                        style="padding-left: 40px;padding-right: 40px; font-size:18px;" class="btn btn-primary">
                        <?= get_field("contact_mail") ?>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-50px">
                <img src="<?= get_field("contact_img")['url'] ?>" alt="<?= get_field("contact_img")['title'] ?>"
                    style="width:120px;height:120px;object-fit:cover" />
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>