<?php 

/**
 * 
 * Template name: branchpage
 */
get_header();
?>
<?php get_template_part('template-parts/page-header');?>

<div class="py-10">
    <div class="container">
        <div class="grid grid-cols-2 gap-5">
                <?php 
                   $all_post = new WP_Query([
                    'post_type' => 'branch',
                    'posts_per_page' => -1
                    ]);
                    while($all_post->have_posts()){
                        $all_post->the_post();
                        get_template_part('template-parts/branch-card');
                    }
                    wp_reset_postdata();
                
                ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>