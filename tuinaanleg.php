<?php get_header() //Template Name: tuinaanleg ?>

<main class="page" class="flex-grow-1">
    <style>
    .flex-container {
        text-align: center;
    }

    .text-header {
        font-family: 'Inclusive Sans', sans-serif;
        font-size: 40px;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
    }

    .text {
        font-family: 'Inclusive Sans', sans-serif;
        font-size: 20px;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
        margin-top: 80px;
    }

    @media (min-width: 992px) {
        .flex-container {
            text-align: left;
        }
    }
    </style>
    <div class="container">

        <div class=" d-flex flex-column text-center my-4 ">
            <h1 class=" mb-3">Tuinsoorten</h1>
            <!-- Breadcrumb Links -->
            <div class="d-inline-block"><a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a><span
                    class="separator"> // </span>
                <span class="last">Onze diensten</span>
                <span class="separator"> // </span>
                <span class="last">Tuinaanleg</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 flex-container   " style="margin-top:80px;">
                <div class="text-header">We laten er gras over groeien <span>-</span></div>
                <div class="text">
                    <p>Bij tuinaanleg hoort de volledige aanleg van je tuin. Van grondwerk tot aanleg. We werken
                        hiervoor met hoogwaardige en duurzame materialen, bijvoorbeeld hout met FSC keurmerk. En
                        natuurlijk met veel groen! We ontzorgen je hierbij volledig. Heb je groene vingers en wil je ook
                        zelf aan de slag? Dan maken we samen een plan voor de realisatie van je groene droomtuin.</p>
                </div>
                <div class=" circle-border">
                    <a href="<?= esc_url(home_url('/advies')); ?>" class="btn btn-primary">Advies nodig?</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 " style="margin-top:80px; ;">
                <img src=" <?= esc_url(get_template_directory_uri()); ?>/images/22scaled.jpg" alt="22scaled"
                    class="img1 rounded object-fit" style="height:700px" />
            </div>
        </div>

    </div>
</main>

<?php get_footer() ?>