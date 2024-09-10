<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php wp_title() ?>WebSite Name</title>
        <?php wp_head(); ?>
        <title><?php wp_title() ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
    </head>


      <body <?php body_class(); ?>>
          <?php wp_body_open(); ?>



         <div class="bg-container">
            <div class="overlay"></div>

           <header class="header">
            <!-- Creating Navbar -->
            <nav  class="navbar navbar-expand-lg navbar-light sans-serif" >
                <div class="container "> <!-- Bootstrap container start-->
                          <!-- Logo -->
                  <a class="navbar-brand" href="<?= home_url(); ?>">
                  <img src="<?= get_template_directory_uri(); ?>/images/groenlogo.png" alt="<?php bloginfo('name'); ?>" />
                  </a>

                        <!-- Hamburger button for mobile -->

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                         <!-- Navigation Menu -->

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                 'container'       => false,
                                'menu'            => 'header-menu', 
                                'depth'           => 2,
                                'menu_class'      => 'navbar-nav ms-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>

                            
                            <!-- Button on the Right side  -->
                             <div class="circle-border">
                               <a  href="#" class="btn btn-primary "> Contact </a>
                               </div>
                
                         </div>
                    
                </div> <!-- Bootstrap container ends-->
            </nav>
        </header>

        <!-- Hero Section -->
         <div>
          <div class="container"> <!-- Bootstrap container start-->
            <section class="hero">
             <div class="hero-content">
              <h1>Tuinen precies </h1>
              <h1>zoals geplant </h1>



                   <div class="button-line-container">
                            <!-- Buttons -->
                            <div class="button-group">
                                <div class="circle-border">
                                <a href="#" class="btn btn-primary">Tuin op maat</a>
                                </div>
                                <div class="circle-border">
                                <a href="#" class="btn btn-secondary">Projecten</a>
                                </div>
                            </div>
                            <!-- End of Button-group -->

                            <!-- Line and Instagram Icon -->
                            <div class="line-container">
                                <div class="line"></div>
                                <a href="https://www.instagram.com" target="_blank" class="instagram-container">
                                <i class="fab fa-instagram"></i> <!-- FontAwesome icon -->
                                </a>
                              </div>
                     </div> 
                     <!--End of  button-line-container -->
            </div>
          <!--End of  hero-content -->
        </section>
    </div> <!-- Bootstrap container ends-->
    <div>
       
    </div>
    <h1?> HIIIIIIIIIIIIIIIIIIIIIIIIIIII</h1>
    <h1>Samar</h1>
     </body>
    </html>


