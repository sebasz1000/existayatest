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
            <div id="main-logo" class="col-1 d-flex align-items-center justify-content-center pr-2">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo wp_upload_dir('2019/04')['url']; ?>/education-usa-logo.png" width="75%"></a>
            </div>
            <div class="col-11 p-0">

              <ul class="nav d-flex justify-content-end" id="top-menu">
                <li><small><i class="icon ion-ios-call medium mr-2" ></i>PBX (+57) (2) 485 0110</small></li>
                <li><a href=""><small>Contacto</small></a></li>
                <li><a href=""><small>menú secundario</small></a></li>
                <li><a href=""><small>Noticias</small></a></li>
                <li><a href=""><small>Ingreso a Moodle</small></a></li>        
              </ul>
               
            <div class="position-relative  py-2  d-flex ">
                <?php 
                $args = array(
                    'theme-location' => 'primary',
                    'menu_class' => 'nav',
                    'container_id' => 'main-menu'

                    
                );
                wp_nav_menu( $args ); 
                ?>
             <button id="header-search-btn" type="button" class="btn btn-primary rounded-0 h-100 px-4">
             <i class="icon ion-ios-search large" ></i>
                </button>
            </div>
           
            </div>
        </div><!-- close row -->
        </header>
