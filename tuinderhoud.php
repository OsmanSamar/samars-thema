<?php get_header() //Template Name: tuinderhoud ?>


<main id="page" class="flex-grow-1">
    <style>

    </style>
    <div class="container">


        <!-- Contact Information Section on Lg Screen -->

        <div>
            <div class="  flex-lg-row  d-flex flex-column align-items-center d-none d-lg-flex"
                style="background-color:#2A3F31; border-radius: 50px; margin-top:40px; margin-bottom:40px;gap-20px; padding:20px ">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/avatar.png" alt="Avatar Image"
                        class="groentuinen" style="width:80px; height:80px" />
                </div>
                <div class=" text-center text-lg-left" style="margin-left:50px; font-size: 30px;">
                    <span>Jouw tuindroom werkelijkheid maken?</span>
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
</main>

<?php get_footer() ?>