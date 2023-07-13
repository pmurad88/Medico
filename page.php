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
<?php get_template_part( 'template-parts/page-header' ) ?>
<div class="py-10">
    <div class="container">
        <div class=" max-w-[800px] m-auto">
            <div class="flex flex-col sm:flex-row gap-x-4 gap-y-6 items-center border-b border-heading border-opacity-20 mb-10 pb-10">
                <div class="">
                        <?php 
                            $button1 = get_field('button1');
                        ?>
                    <a target="_blank" class="btn-primary rounded-md btn"  href="<?php echo $button1['url'];?>">
                        <?php echo $button1['title']; ?>
                    </a>
                </div>
                <div class="">
                    <?php 
                        $button2 = get_field('button_2');
                    ?>
                    <a target="_blank" class="btn-success rounded-md hover:bg-primary hover:text-white font-semibold transition-all duration-300" href="<?php echo $button2['url'];?>">
                        <?php echo $button2['title']; ?>
                    </a>
                </div>
            </div>
            <div class="prose max-w-full prose-headings:text-2xl">
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