<?php get_header() ?>


<head>
    <!-- Other header elements... -->
    <style>
    /* Add some margin or padding to separate sections */
    .hero+.image-text-section {
        margin-top: 50px;
    }

    .image-text-section {
        padding: 50px 0;
        /* Padding to give space around the section */
        background-color: #f9f9f9;
        /* Add a background color to distinguish the section */
    }

    .image-grid {
        display: flex;
        flex-wrap: wrap;
    }

    .image-grid img {
        width: 100%;
        margin: 5px;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .image-text-section {
            display: flex;
            flex-direction: column;
        }

        .text-section {
            order: 1;
        }

        .images-section {
            order: 2;
            display: flex;
            overflow-x: scroll;
        }

        .image-grid {
            flex-wrap: nowrap;
        }

        .image-grid img {
            width: auto;
            height: 100px;
        }
    }
    </style>
</head>



<main class="page">
    <div class="container">
        <!-- New Section under Hero Section -->
        <section class="image-text-section">
            <div class="container">
                <div class="row">

                    <!-- Left side: Text -->
                    <div class="col-lg-6 text-section">
                        <h1>Maak van jouw tuin een bijzondere plek om te zijn.</h1>
                        <p>Maak van jouw tuin een bijzondere plek om te zijn.</p>
                    </div>

                    <!-- Right  side: Images -->
                    <div class="col-lg-6 images-section">
                        <div class="image-grid">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/greendesign.png"
                                alt="Image 1">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/backyardgarden.png"
                                alt="Image 2">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Rick.png" alt="Image 3">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/naturalgrass.png"
                                alt="Image 4">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/flower.png" alt="Image 5">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
        <?php endwhile; endif; ?> -->
    </div>
</main>

<?php get_footer() ?>