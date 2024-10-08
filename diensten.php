<?php get_header() //Template Name: diensten ?>


<main class="flex-grow-1">
    <style>
    .bg-img {
        position: relative;
        text-align: center;
        color: #F8F4EA;
        /* font-family: 'Henderson Sans'; */
        font-weight: bold;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: auto;
        margin-bottom: 0;
        background-size: cover;


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

    .first-container {
        border: 1px solid #fff;
        border-radius: 10px;
        height: 310px;

    }

    .second-container {
        background-color: #5B7D6C;
        margin: 10px 10px;
        border-radius: 10px;
    }

    .border-bottom {

        border-bottom-width: 1px;
    }


    @media (min-width: 992px) {

        /* Hide arrow on large screens */
        .down {
            display: none;
        }




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

            height: 690px
        }


        .content h1 {

            font-size: 90px;
            font-weight: 700;
            line-height: 125px;
        }

        .bottom-center {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            top: 100%;
            left: 73%;
            transform: translate(-50%, -50%);
        }
    }
    </style>
    <div class="container">
        <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" style="font-size:18px;" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <span class="separator"> // </span>
            <span class="" style="font-size:16px;">Onze diensten</span>
        </div>



        <div class="container bg-img mt-lg-auto mb-0">
            <div class="position-relative">
                <div class=" overlay" style=" border-radius: 10px; "></div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="groentuinen"
                    style=" ;  object-fit: cover; border-radius: 10px; ;" />
                <div class="content center">
                    <div class="col-12 col-lg-7 bottom-center">

                        <h1>Onze diensten</h1>
                    </div>
                    <div class="col-12 col-lg-7 bottom-center">
                        <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" />
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-top:120px;">
            <div class="col-12 col-lg-4">

                <div class="first-container" id="content">

                    <div class="second-container d-flex flex-column">
                        <div class=" d-flex flex-row align-items-center justify-content-between  border-bottom  "
                            style="margin:10px; ">
                            <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/design.svg" alt="" class="icon"
                                style="width:26px; height: 26px;">

                            <p style="font-size:18px;">Tuinontwerp</p>

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" style="width:26px; height: 26px;" />


                        </div>
                        <div class=" d-flex flex-row align-items-center justify-content-between border-bottom "
                            style="margin:10px; ">

                            <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/design.svg" alt="" class="icon"
                                style="width:26px; height: 26px;">
                            <p>Tuinaanleg</p>

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" style="width:26px; height: 26px;" />
                        </div>
                        <div class=" d-flex flex-row align-items-center justify-content-between border-bottom  "
                            style="margin:10px; ">

                            <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/design.svg" alt="" class="icon"
                                style="width:26px; height: 26px;">
                            <p>Tuinonderhoud</p>

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" style="width:26px; height: 26px;" />
                        </div>
                        <div class=" d-flex flex-row align-items-center justify-content-between  "
                            style="margin:10px; ">

                            <img src="//groentuinen.b-cdn.net/wp-content/uploads/2024/04/design.svg" alt="" class="icon"
                                style="width:26px; height: 26px;">
                            <p>Advies</p>

                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                                alt="downarrow Icon" class="downarrow-icon" style="width:26px; height: 26px;" />
                        </div>


                    </div>
                </div>



            </div>


            <div class="col-12 col-lg-7">

                <div class="" style="margin-left:70px; margin-right:40px;">


                    <p class="" style=";">


                        Bij GROENtuinen kun je terecht voor een écht groene tuin. We maken een tuinontwerp op basis van
                        jouw
                        wensen. En vervolgens nemen wij de complete tuinaanleg op ons. Van grondwerk en bestrating tot
                        het
                        plaatsen van schuttingen. En van veranda’s en buitenkeukens tot beplanting. Zo zijn wij de
                        allround
                        hovenier voor jouw tuin.



                        Voor onderhoud van tuinen richten wij ons onder andere op renovatie van de tuin,
                        voorjaarsbeurten,
                        zomersnoei, najaarsbeurt en bemesting. En wil je graag dat een tuinexpert meedenkt over jouw
                        tuin?
                        Krijg advies op maat over planten, ligging en verzorging van je tuin.
                    </p>
                </div>
            </div>



        </div>




    </div>
</main>

<?php get_footer() ?>