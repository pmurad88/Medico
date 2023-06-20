<?php
/**
 * The header.
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package wpmedico
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="py-2">
    <div class="container">
        <div class="flex justify-between items-center gap-2 max-w-[1050px] m-auto ">
            <div class="flex gap-3 items-center">
                <a href="<?php echo home_url('/');?>">
                    <img class="" src="<?php echo get_theme_file_uri( 'assets/img/h-logo.svg' )?>" alt="">
                </a>
            </div>
            <div class="hidden md:block">
                <ul class="h-icon flex gap-6 text-2xl" >
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="flex gap-4 items-center">
                <div class="bg-secondary text-white py-[3px] sm:py-[9px] px-3 sm:px-4 text-2xl rounded-md">
                    <i class="fa-solid fa-headphones-simple"></i>
                </div>
                <div class="btn btn-primary">
                    <a href="">
                        Admission
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-6 bg-secondary">
    <div class="container">
        <div class="h-menu hidden md:block">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class' => 'flex gap-8 justify-center text-lg text-white'
                ));
            ?>
        </div>
    </div>
</div>