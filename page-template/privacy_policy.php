<?php 
/**
 * Template name:privacy_policy
 * 
 */
get_header();
?>
<?php get_template_part('template-parts/page-header');?>
<div class="py-20">
    <div class="container">
        <div class="max-w-[800px] m-auto">
            <div class="prose max-w-full  ">
                <?php 
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                ?>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>