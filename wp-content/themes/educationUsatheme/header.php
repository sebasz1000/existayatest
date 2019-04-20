<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="site-header" class="container">
        <div class="row">
            <div id="main-logo" class="col-3 col-xs-2 col-md-3 col-lg-2 d-flex align-items-center justify-content-center pr-2">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo wp_upload_dir('2019/04')['url']; ?>/education-usa-logo.png" width="75%"></a>
            </div>
            <div class="col-9 col-xs-10 col-md-9 col-lg-10 p-0">

              <ul class="nav d-flex justify-content-end" id="top-menu">
                <li><small><i class="icon ion-ios-call medium mr-2" ></i>PBX (+57) (2) 485 0110</small></li>
                <li><a href=""><small>Contacto</small></a></li>
                <li><a href=""><small>menú secundario</small></a></li>
                <li><a href=""><small>Noticias</small></a></li>
                <li><a href=""><small>Ingreso a Moodle</small></a></li>        
              </ul>
               
            <div class="position-relative  py-2  d-flex ">
                <div class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icon ion-ios-menu large" style="font-size:2em;"></i>    
                    </button>
                    <?php 
                    $args = array(
                        'theme-location' => 'primary',
                        'menu_class' => 'nav',
                        'container_id' => 'main-menu',
                        'container_class' => 'collapse navbar-collapse'

                        
                    );
                    wp_nav_menu( $args ); 
                    ?>
                </div>
                <button id="header-search-btn" type="button" class="btn btn-primary rounded-0 h-100 px-4">
                <i class="icon ion-ios-search large" ></i>
                    </button>
            </div>
           
            </div>
        </div><!-- close row -->
        </header>
