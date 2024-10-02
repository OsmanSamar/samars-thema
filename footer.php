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
    <div class="container">

        <div class="row">

            <div class="col-lg col-12 d-flex order-4 order-lg-1 text-lg-start text-center">
                <ul class="nav pb-3 pb-lg-0 mt-auto d-flex flex-column mx-auto mx-lg-0 gap-2">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white p-0">Privacyverklaring</a>
                    </li>
                </ul>
            </div>



            <div
                class="logo  col-lg-4 col-12 d-flex flex-column align-items-center  justify-content-center  order-1 order-lg-2">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenlogo.png"
                    alt="<?php bloginfo('name'); ?>" class="" />
                <div class="d-none d-lg-block">
                    <p class="text-center mt-3 text-white text-opacity-50 copyright">
                        © GROENtuinen -
                        Uit de grond gestampt door <a target="_blank" href="">Code
                            Blauw</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-12 mx-auto order-2 d-lg-none mt-lg-4">
                <div class="socials d-flex justify-content-center flex-row gap-lg-3 gap-5 mt-lg-3 mt-lg-0 my-5">
                    <a class="social-icon" target="_blank" aria-label="Instagram" href="">
                        <img src="//groentuinen.b-cdn.net/wp-content/themes/groentuinen/public/images/instagram.8a59ff.svg"
                            alt="Instagram">
                    </a>
                </div>
            </div>

            <div
                class="col-lg mt-auto col-12 d-flex text-center text-lg-end flex-column order-3 order-lg-3 align-items-lg-end justify-content-lg-center adres">
                <a aria-label="Neem contact op via telefoon" href="tel:+31621830806">06 21830806</a>
                <a aria-label="Neem contact op via Mail" href="mailto:info@groentuinen.nl">info@groentuinen.nl</a>
                <p></p>
            </div>
            <div class="col-12 order-4 my-0">
                <div class="mt-4 pt-3">
                    <div class="seperator  mt-lg-0"></div>
                </div>
            </div>

            <div class="mt-4 pt-3">
                <div class="seperator  mt-lg-0"></div>
            </div>
        </div>

        <div class="col-lg-5 col-12 mx-auto d-none d-lg-block order-lg-4 mt-lg-4">
            <div class="socials d-flex justify-content-center flex-row gap-lg-3 gap-5 mt-lg-3 mt-lg-0 my-5">
                <a class="social-icon" target="_blank" aria-label="Instagram" href="">
                    <img src="//groentuinen.b-cdn.net/wp-content/themes/groentuinen/public/images/instagram.8a59ff.svg"
                        alt="Instagram">
                </a>
            </div>
        </div>

        <div class="col-12 border-top d-block d-lg-none"></div>
        <div class="d-block d-lg-none order-5 ">
            <p class="text-center text-balance text-white text-opacity-50 copyright">
                GROENtuinen <br>
                Uit de grond gestampt <br>door <a href="">Code Blauw</a>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>