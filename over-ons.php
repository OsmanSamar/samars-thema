<?php get_header();
//Template Name: over ons
?>

<main class="flex-grow-1">
    <style>
    .bg-img {
        position: relative;
        text-align: center;
        /* padding: 20px 0; */
        color: #F8F4EA;
        /* font-family: 'Henderson Sans'; */
        font-weight: bold;



    }

    .bg-img .groentuinen {
        /* width: 100%; */
        height: 52vh;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background: linear-gradient(239deg, #212e25 0%, #0c2c16 100%);
        background-color: transparent;
        opacity: 0.6;
    }



    .content {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .bottom-center {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    h1 {

        margin-bottom: 193px;
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


    .groenoverons {
        height: 650px;
    }

    @media (min-width: 992px) {

        /* Hide arrow on large screens */
        .down {
            display: none;
        }

        h1 {

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

        .text {
            font-size: 20px;
            margin-left: 50px;
        }

        .text-header {

            font-size: 40px;
            margin-left: 50px;
            margin-top: 80px;
        }


    }

    .text {
        font-size: 20px;
        text-align: left;
        align-items: start;
        margin-bottom: 48px;
    }

    .text-header {

        font-size: 40px;
        text-align: left;
        align-items: start;
        margin-bottom: 48px;

    }
    </style>

    <div class="container">

        <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> // </span><span class="last">Over ons</span>



        <div class="container bg-img mt-lg-auto mb-0">
            <div class="overlay"></div>
            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/overons.png" alt="groentuinen"
                class="groentuinen" />


            <div class="content center">
                <div class=" bottom-center">
                    <h1>Expert in groen en duurzaam</h1>
                </div>
                <div class=" bottom-center">
                    <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                            alt="downarrow Icon" class="downarrow-icon" />
                    </a>
                </div>
            </div>

        </div>




        <div class="text-lg-start text-center" id="content">
            <div class="container">
                <div class="row">
                    <!-- Column Wrapper -->
                    <div class="col-12 col-lg-10 mx-auto mt-5 my-lg-5 py-5">
                        <div class="row gx-5">
                            <!-- 1st Column -->
                            <div class="col-12 col-md-6 col-lg-5 order-2 order-lg-1 mb-4 mb-lg-0">
                                <div class="d-flex flex-column text-center align-items-center ">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groenoverons.png"
                                        alt="groenoverons" class="groenoverons" />
                                </div>
                            </div>
                            <!-- 2nd Column -->
                            <div class="col-12 col-md-6 col-lg-7 ml-lg-4 order-1 order-lg-2 ">
                                <div class="d-flex flex-column  text-left align-items-start ">
                                    <span class="text-header ">Vakkundig maatwerk <span>-</span></span>
                                    <div class="text ">
                                        <p>Het mooiste aan het hoveniersvak? Voor Peter, het gezicht achter
                                            GROENtuinen,
                                            is dat
                                            met duurzame materialen een groene tuin creëren die precies past bij de
                                            wensen van
                                            de klant. Vol met groen, want van groen worden mensen én de natuur blij!
                                        </p>
                                        <p>Wat ooit begon als een vakantiebaantje bij een hoveniersbedrijf, groeide
                                            uit
                                            tot een
                                            passie voor het vak. Peter is tuinontwerper en all

                                        </p>
                                        <div class="circle-border">
                                            <a href="#" class="btn btn-primary">kennismaken?</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</main>

<?php get_footer() ?>