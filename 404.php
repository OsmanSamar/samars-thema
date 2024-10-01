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
    </div>
</main>

<?php get_footer() ?>