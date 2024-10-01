<?php get_header() //Template Name: 404 ?>


<main id="page" class="404">
    <style>
        .img-container {
            position: relative;
            text-align: center;
            color: white;
        }

        .top {
            position: absolute;
            top: 240px;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 90px;
        }



        .centered {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
        }

        .bottom {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <div class="container">
        <!-- <h1>404 - Pagina niet gevonden</h1>
        <p>
            <a href="<?= home_url() ?>">Ga terug naar de homepagina</a>
        </p> -->

        <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="last">404</span>
        </div>

        <div class="d-flex clo-12 col-lg-12 align-items-center justify-content-center img-container">


            <div class="d-flex flex-column text-center align-items-center  ">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/404.svg" alt="Groenoverons"
                    class="groenoverons" />

                <div class="top">Oeps!</div>
                <div class="centered">Te diep gegraven</div>
                <div class=" bottom d-flex d-lg-flex">
                    <div class="circle-border">
                        <a href="#" class="btn btn-primary"
                            style="padding-left: 50px;padding-right: 50px; font-size:18px;">Terug naar Home</a>
                    </div>
                </div>
            </div>

        </div>


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