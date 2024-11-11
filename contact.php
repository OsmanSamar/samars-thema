<?php get_header();
//Template Name: contact
?>

<main class="flex-grow-1">

    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1200px;
        background-position: 140% 100%;
    }



    .bg-img {
        position: relative;
        text-align: center;
        color: #F8F4EA;
        font-weight: bold;
    }

    .bg-img img {
        width: 100%;
        height: 34vh;
    }



    .content {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .bottom-center {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
    }



    h1 {
        margin-bottom: 81px;
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


    .down:hover {
        /* transform: translateY(5px) */
        /*  Move down on hover*/
    }

    @media (min-width: 992px) {

        /* Hide arrow on large screens */
        .down {
            display: none;
        }

        h1 {
            margin-bottom: 0;
            font-size: 90px;
            line-height: 70px;
            font-weight: bold;
        }

        .bg-img img {
            height: 371px
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -.75rem;
        margin-left: calc(var(--bs-gutter-x) * -.5);
        margin-right: -.75rem;
        margin-right: calc(var(--bs-gutter-x) * -.5);
        margin-top: 0;
        margin-top: calc(var(--bs-gutter-y) * -1);
    }

    /* Testimonials Image styling */
    .contact-icon img {
        object-fit: cover;
        max-width: 130px;
        height: 130px;
        margin-bottom: 40px;
    }

    .text-header {
        color: #F5A287;
        font-size: 22px;
    }

    .text {
        font-size: 18px;
    }

    .text-contact {
        font-size: 20px;
        line-height: 40px;
    }
    </style>


    <div class="container">


        <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; font-size:14px; ">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="last">Contact</span>
        </div>

        <div class="container bg-img mt-lg-auto mb-0 fadeIn ">
            <div class="position-relative">
                <div class="overlay  rounded" style="border-radius:2px; "></div>
                <img src="<?= get_field("contact_bg_img")['url'] ?>" alt="<?= get_field("contact_bg_img")['alt'] ?>"
                    class="groentuinen rounded" style="object-fit:cover;" />
                <div class="content center">
                    <div class="col-12 col-lg-7 bottom-center">
                        <h1>
                            <?= get_field("text_on_bg_img") ?>
                        </h1>
                    </div>
                    <div class="col-12 col-lg-7 bottom-center">
                        <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                            <img src="<?= get_field("downarrow")['url'] ?>" alt="<?= get_field("downarrow")['alt'] ?>"
                                class="downarrow-icon" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-leaf">

        <div class="text-lg-start text-center container" id="content">
            <div class="">
                <div class="col-10 mx-auto mt-5 my-lg-5 py-5">
                    <div class="row">

                        <!-- Testimonials Section on All Screens -->
                        <div class="row contact-icon  fadeIn" style="margin-top:15px;">
                            <?php
                            foreach (get_field("testimonials_section") as $testimonial) {
                                ?>
                            <div class="col-12 col-lg-4 testimonial">
                                <img src="<?= $testimonial['afbeelding']['url'] ?>"
                                    alt=" <?= $testimonial['afbeelding']['alt'] ?>" class="testimonial-img" />
                                <h1 style="color: #f5a287;
                                             font-size: 22px;
                                            font-weight: 500; ">
                                    <?= $testimonial["testimonials_section_title"] ?>
                                </h1>
                                <p class="" style="font-size:16px;color: #ffffff;  ">
                                    <?= $testimonial["testimonials_section_text"] ?>
                                </p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Additional Space -->
                <div class="py-4 py-lg-1"></div>
            </div>
        </div>


        <div class=" container contact-text" style="margin-top:30px; margin-bottom:123px;">
            <div class="col-lg-7 mx-auto">
                <div class="text-contact text-center">
                    <p><span style="font-weight:500;  font-size:17px;">
                            <?= get_field("contact_text") ?>
                        </span>

                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Information Section on Sm Screen -->

    <div>
        <div style="background-color:; margin-top:40px; gap-20px; padding:20px; "
            class="row  flex-lg-row  d-flex flex-column align-items-left d-flex d-lg-none">

            <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start"
                style="margin-bottom:-62px">

                <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field(" avatar")['title'] ?>" style="width:140px; height:140px;
                object-fit:cover;" />
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>