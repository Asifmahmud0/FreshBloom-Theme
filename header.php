<?php
// This template for displaying the header
?>


<!DOCTYPE html>
<html lang="<?php echo language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header>
        <div id="header_area" class="<?php echo get_theme_mod('asif_menu_option');?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo home_url( );?>"><img src= " <?php echo get_theme_mod('asif_logo'); ?>" alt=""></a>
                    </div>
                    <div class="col-md-9">
                        <?php wp_nav_menu( array('theme_location' => 'primary _menu', 'menu_id' => 'nav') ); ?>
                    </div>
                </div>
            </div>
        </div>
</header>