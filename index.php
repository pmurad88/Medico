<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package wptmedico
 */
 get_header(); 
?>
<?php get_template_part( 'template-parts/card-header' ) ?>
<div class="py-10">
    <div class="container">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-12">
            <?php 
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/postcard');
                }
            ?>
        </div>
        <div class="">
            <?php the_posts_pagination( array(
                'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>'
            )); ?>
        </div>
    </div>
</div>






<?php get_footer(); ?>