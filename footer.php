<div class="whatsapp-fixed">
    <span class="close-button">&times;</span>
    <div class="background-text">
        <?= get_field("whatsapp_text", 'options') ?>
    </div>
    <a href="https://wa.me/<?= get_field('whatsapp_number', 'options') ?>" target="_blank">
        <img src="<?= get_field('whatsapp_img', 'options')['url'] ?>"
            alt="  <?= get_field('whatsapp_img', 'options')['title'] ?>" class="whatsapp-icon" />
    </a>

</div>

<footer class="footer">
    <style>
    .border-top {
        border: 1px solid #ffff;
        width: 100%;
        height: 1px;
        opacity: 0.5;
        margin-bottom: 90px;

    }
    </style>



    <div class="container" style="margin-top:50px">

        <div class="row">

            <div class="col-lg col-12 d-flex order-4 order-lg-1 text-lg-start text-center">
                <ul class="nav pb-3 pb-lg-0 mt-auto d-flex flex-column mx-auto mx-lg-0 gap-2">
                    <li class="nav-item">
                        <a href="<?= get_field("privacyverklaring_link", 'options')['url'] ?> "
                            class="nav-link text-white p-0">
                            <?= get_field("privacyverklaring_link", 'options')['title'] ?>
                        </a>
                    </li>
                </ul>
            </div>



            <div class=" logo col-lg col-12 d-flex flex-column align-items-center  justify-content-center  order-1 order-lg-2"
                style="margin-bottom:61px;">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenlogo.png"
                    alt="<?php bloginfo('name'); ?>" class="" />


                <div class="d-block d-lg-none ">
                    <div class=" d-flex justify-content-center flex-row" style="margin-top:8rem;">
                        <a href="https://www.instagram.com" target="_blank" class="instagram-container"
                            style=" width: 40px;height: 40px;background-color: #ffff; border-radius: 50%; border: none; text-align: center; line-height: 40px;  position: absolute;">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>



                <div class="d-none d-lg-block" style="margin-bottom:-75px; white-space:nowrap;">
                    <p class="text-center mt-3 text-white text-opacity-50 copyright ">

                        <?= get_field("copyright_text", 'options') ?>
                        <a target="_blank" href="https://code-blauw.nl/">
                            <?= get_field("copyright_code_blauw", 'options') ?>
                        </a>
                    </p>
                </div>
            </div>


            <div
                class="col-lg col-12 d-flex text-lg-end text-center flex-column order-3 order-lg-3 align-items-lg-end justify-content-lg-center adres">
                <ul class="nav pb-3 pb-lg-0 mt-auto d-flex flex-column mx-auto mx-lg-0 gap-2">

                    <a href="tel:<?= get_field("contact_number", 'options') ?>"
                        style=" white-space: nowrap;"><?= get_field("contact_number", 'options') ?>
                    </a>
                    <a href="mailto:<?= get_field("contact_mail", 'options') ?>"
                        style=" white-space: nowrap;"><?= get_field("contact_mail", 'options') ?>
                    </a>
                </ul>
            </div>


            <div class="col-12 order-4 " style="margin-top:122px">
                <div class="mt-4 pt-3">
                    <div class="seperator  mt-lg-0"></div>
                </div>
            </div>


        </div>

        <div class="col-lg-5 col-12 mx-auto d-none d-lg-block order-lg-4 mt-lg-4  ">
            <div class=" d-flex justify-content-center flex-row gap-lg-3 gap-5 mt-lg-3 mt-lg-0 my-5">
                <a href="https://www.instagram.com" target="_blank" class="instagram-container"
                    style=" width: 40px;height: 40px;background-color: #ffff; border-radius: 50%; border: none; text-align: center; line-height: 40px;  position: absolute;">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

    </div>


    <div class="col-12 border-top d-block d-lg-none"></div>
    <div class="container">
        <div class="d-block d-lg-none order-5 ">
            <p class="text-center text-balance text-white text-opacity-50 copyright">
                <?= get_field("copyright_text_sm_screen", 'options') ?>
                <a target="_blank" href="https://code-blauw.nl/">
                    <?= get_field("copyright_code_blauw_sm_screen", 'options') ?>
                </a>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>