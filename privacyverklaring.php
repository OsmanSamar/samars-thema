<?php get_header();
//Template Name: privacyverklaring
?>

<main class="flex-grow-1">

    <style>
    </style>


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