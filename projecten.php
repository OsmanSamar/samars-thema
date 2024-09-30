<?php get_header();
//Template Name: projecten ?>

<main class="flex-grow-1">
    <style>
    .bg-leaf {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/leaf.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: 1600px;
    }

    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .grid-item {
        display: flex;
        justify-content: center;
    }

    .grid-item:nth-child(2) {
        grid-row: span 2;
        /* Spans second image across 2 rows */
    }

    .grid-item:last-child {
        align-self: start;
        /* Moves the last image to the top */
    }
    </style>
    <div class="bg-leaf">
        <div class="container">

            <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
                <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
                <span class="separator"> // </span>
                <span class="last">Projecten</span>
            </div>

            <!-- First Container -->
            <div class="container " style="margin-top: 300px">
                <div class="row">
                    <!-- 1st Row: Text and Image on LG,  -->

                    <div class="row">
                        <!-- 1st Row: Text and Image on LG -->
                        <div class="col-12 col-lg-5 mb-4">
                            <div class="text-header">Projecten</div>
                            <div class="text">
                                <div class="circle-border">
                                    <a href="#" class="btn btn-primary"
                                        style="padding-left: 40px;padding-right: 40px; font-size:18px;">kennismaken?</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-7 mb-4 text-center">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/chinaoldgarden.png"
                                alt="chinaoldgarden" class="img1 object-fit-cover rounded" />
                        </div>

                        <!-- Using CSS grid for layout control -->
                        <div class="image-grid col-12 d-lg-grid">
                            <div class="grid-item" style="grid-row: span 2;  ">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled11.jpg"
                                    alt="scaled11" class="object-fit-cover rounded" style="height:400px;" />
                            </div>
                            <div class="grid-item">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled19.jpg"
                                    alt="scaled19" class="object-fit-cover rounded" style="height:550px; width:; " />
                            </div>
                            <div class="grid-item">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled5.jpg"
                                    alt="scaled5" class="object-fit-cover rounded" style="height:450px; width:330px" />
                            </div>

                            <div class="grid-item" style="grid-row: span 2;">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled51.jpg"
                                    alt="scaled13" class="object-fit-cover rounded" style="height:450px; width:330px" />
                            </div>
                            <div class="grid-item" style="">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled13.jpg"
                                    alt="scaled65" class="object-fit-cover rounded" style="height:800px; " />
                            </div>
                            <div class="grid-item" style="align-self: start; grid-row: span 2;">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/scaled65.jpg"
                                    alt="scaled51" class="object-fit-cover rounded" style="height:400px;" />
                            </div>

                        </div>
                    </div>


                </div>


            </div>


















        </div>

    </div>
</main>

<?php get_footer() ?>