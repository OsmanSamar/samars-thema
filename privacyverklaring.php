<?php get_header();
//Template Name: privacyverklaring
?>

<main class="flex-grow-1">

    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1200px;
        background-position: 112% 99%;
    }

    .responsive-header {
        color: #fff9f4;
        font-family: henderson-sans-basic, sans-serif;
        font-size: 1.5em;
        font-weight: 700;
        line-height: 125px;
        margin-bottom: 45px;
    }

    @media(min-width: 768px) {
        .responsive-header {
            font-size: 2em;
        }
    }

    @media (min-width: 992px) {
        .responsive-header {
            font-size: 3em;
        }
    }
    </style>
    <div class="bg-leaf">
        <div class="container">

            <div class=" d-flex flex-column text-center my-4 ">
                <!-- Breadcrumb Links -->
                <div class="d-inline-block" style="color: #fff9f4;
              font-family: henderson-sans-basic, sans-serif;
                 font-size: 14px;
                 font-weight: 400;
                line-height: -4px;
                  margin-top:45px;">
                    <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span class="separator"> //
                    </span>
                    <span class="last">Home</span>
                    <span class="separator"> // </span>
                    <span class="last">Privacyverklaring</span>
                </div>

                <h1 class="responsive-header fadeIn  mb-3">
                    <?= get_field("main_title") ?>
                </h1>
            </div>

            <div class="row">
                <div class="col-lg-3 "></div>
                <div class=" col-lg-6 max-auto d-flex flex-column align-items-center">
                    <div>
                        <span style="margin:50px 0;">
                            <?= get_field("year") ?>
                        </span>
                        <h1 style="margin:50px 0;">
                            <?= get_field("inleiding") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("inleiding_text") ?>
                        </p>

                        <h1 style="margin:50px 0;">
                            <?= get_field("verwerken_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("verwerken_text") ?>
                        </p>

                        <h1 style="margin:50px 0;">
                            <?= get_field("minderjarig_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("minderjarig_text") ?>
                        </p>

                        <h1 style="margin:50px 0;">
                            <?= get_field("verzoek_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("verzoek_text") ?>
                        </p>

                        <h1 style="margin:50px 0;">
                            <?= get_field("klachten_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("klachten_text") ?>
                        </p>

                        <h1 style="margin:50px 0;">
                            <?= get_field("gegevens_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("gegevens_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("bescherming_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("bescherming_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("cookies_en_ip_adres_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("cookies_en_ip_adres_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("functionele_cookies_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("functionele_cookies_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("tracking_cookies_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("tracking_cookies_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("password_gegevens_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("password_gegevens_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("diensten_of_producten_van_derden_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("diensten_of_producten_van_derden_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("doorlinken_naar_websites_van_derden_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("doorlinken_naar_websites_van_derden_text") ?>
                        </p>
                        <h1 style="margin:50px 0;">
                            <?= get_field("actuele_privacyverklaring_title") ?>
                        </h1>
                        <p style="font-size:16px;letter-spacing:0px;line-height:30px;font-weight:400;">
                            <?= get_field("actuele_privacyverklaring_text") ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 "></div>
            </div>

            <!-- Contact Information Section on Lg Screen -->
            <div>
                <div class="container fadeIn ">
                    <div class="  flex-lg-row  d-flex  align-items-center justify-content-center d-none d-lg-flex"
                        style="background-color:#2A3F31; border-radius: 50px; margin-top:50px; margin-bottom:50px;gap-20px; padding:20px ">
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <img src="<?= get_field("avatar")['url'] ?>" alt="<?= get_field("avatar")['alt'] ?>"
                                class="groentuinen" style="object-fit:cover;width:80px; height:80px" />
                        </div>
                        <div class=" text-center text-lg-left"
                            style=" margin-left: 20px; margin-right:194px;font-size: 30px; font-weight:300; line-height:2px;font-family: 'Henderson Sans-basic', sans-serif;">
                            <span>
                                <?= get_field("contact_text") ?>
                            </span>
                        </div>
                        <div class="button-group" style="margin-left:50px">
                            <div class="circle-border ">
                                <a href="tel:<?= get_field("contact_number") ?>" class="btn btn-secondary"
                                    style=" white-space:nowrap;"><?= get_field("contact_number") ?>
                                </a>
                            </div>
                            <div class="circle-border">
                                <a href="mailto:<?= get_field("contact_mail") ?>" class="btn btn-primary"
                                    style=" white-space:nowrap;"><?= get_field("contact_mail") ?>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Contact Information Section on Sm Screen -->
    <div>

        <div style="background-color:#2A3F31; margin-top:50px; gap-20px; padding:20px "
            class="row  flex-lg-row  d-flex flex-column align-items-center d-flex d-lg-none fadeIn ">
            <div class="col-12 col-lg-4 text-center text-lg-left" style="margin-top:20px; ">
                <h2 style="font-size:36px;
                padding-bottom: 39px; 
                color: #fff;
                line-height: 55px;">
                    <?= get_field("contact_text") ?>
                </h2>
            </div>

            <div class="button-group col-12 col-lg-4 flex-lg-row d-flex flex-column justify-content-center justify-content-lg-start "
                style="margin-bottom:70px">

                <div class="circle-border ">
                    <a href="tel:<?= get_field("contact_number") ?>" class="btn btn-secondary"
                        style=" white-space: nowrap;"><?= get_field("contact_number") ?>
                    </a>
                </div>

                <div class="circle-border">
                    <a href="mailto:<?= get_field("contact_mail") ?>" class="btn btn-primary"
                        style=" white-space: nowrap;"><?= get_field("contact_mail") ?>
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