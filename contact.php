<?php get_header();
//Template Name: contact
?>

<main class="flex-grow-1">




    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: ;
    }



    .bg-img {
        position: relative;
        text-align: center;
        /* padding: 20px 0; */
        color: #F8F4EA;
        /* font-family: 'Henderson Sans'; */
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

    /* Image styling */
    .contact-icon img {
        width: 80px;
        height: 80px;
        object-fit: contain;

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
    }
    </style>








    <div class="container">

        <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> // </span><span class="last">Contact</span>

        <div class="container bg-img mt-lg-auto mb-0">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/groentuinen.png" alt="groentuinen" />
            <div class="content center">
                <div class="col-12 col-lg-7 bottom-center">

                    <h1>Contact</h1>
                </div>
                <div class="col-12 col-lg-7 bottom-center">
                    <a class="down d-lg-none d-block" aria-label="Go to the content" href="#content">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/downarrow.svg"
                            alt="downarrow Icon" class="downarrow-icon" />
                    </a>
                </div>
            </div>

        </div>






        <div class="text-lg-start text-center" id="content">
            <div class="bg-leaf">
                <div class="col-10 mx-auto mt-5 my-lg-5 py-5">
                    <div class="row">
                        <!-- 1 -->
                        <div class="col-12 col-md-4 col-lg-4 fadIn visible">
                            <div class="d-flex flex-column gap-3 text-center align-items-center contact-icon">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/map.svg" alt="Map Icon"
                                    class="mx-auto" />
                                <span class="text-header">Barneveld</span>
                                <div class="text">
                                    <p><span style="font-weight: 400;">GROENtuinen is gevestigd in Barneveld. Wij werken
                                            in
                                            een straal van zo’n 50 kilometer rondom Barneveld. Neem dus ook contact op
                                            als
                                            je niet in Barneveld woont!</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="col-12 col-md-4 col-lg-4 fadIn visible">
                            <div class="d-flex flex-column gap-3 text-center align-items-center contact-icon">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/contacticon.svg"
                                    alt="Contact Icon" class="mx-auto" />
                                <span class="text-header">+316 123 456 78</span>
                                <div class="text">
                                    <p><span style="font-weight: 400;">Enthousiast en direct een afspraak maken? Laat
                                            het
                                            ons weten en neem telefonisch contact op.</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="col-12 col-md-4 col-lg-4 fadIn visible">
                            <div class="d-flex flex-column gap-3 text-center align-items-center contact-icon">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/email.svg"
                                    alt="Email Icon" class="mx-auto" />
                                <span class="text-header">info@groentuinen.nl</span>
                                <div class="text">
                                    <p><span style="font-weight: 400;">Interesse in een GROENtuin? Stuur vrijblijvend
                                            een
                                            e-mail voor meer informatie over onze diensten of om een afspraak te
                                            maken.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional Space -->
                <div class="py-4 py-lg-1"></div>

            </div>
        </div>



        <div class="contact-text">
            <div class="col-lg-7 mx-auto">
                <div class="text-contact text-center">
                    <p><span style="font-weight: 400;">Met GROENtuinen krijg je gegarandeerd een unieke en groene
                            tuin.
                            Speciaal ontworpen, aangelegd en onderhouden voor jou.&nbsp;</span><span
                            style="font-weight: 400;">Maak van jouw tuin een bijzondere plek om te zijn. Vol met
                            groene
                            elementen, want we zijn niet voor niets GROENtuinen!</span></p>
                </div>
            </div>
        </div>


    </div>
</main>

<?php get_footer() ?>