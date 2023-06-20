<?php
/**
 * Template name: homepage
 */
get_header();
?>


<div class="slider owl-carousel">
    <?php
        while( have_rows('slider') ){
            the_row();
        
    ?>
    <div class="relative">
        <?php 
            $id = get_sub_field( 'image' );
            echo wp_get_attachment_image( $id, 'full', false, [
                'class' => 'w-full h-full object-cover top-0 left-0'
            ] );
        ?>
        <div class="bg-banner w-full h-full object-cover absolute z-10 bottom-0"></div>
        <div class="absolute bottom-20 left-1/2 -translate-x-1/2 w-full text-center z-20 ">
            <h1 class="text-white text-[80px] mb-6">
                <?php the_sub_field('text1'); ?>
            </h1>
            <h2 class="text-white">
                <?php the_sub_field('text_2'); ?>
            </h2>
        </div>
    </div>
    <?php
        }
    ?>
</div>

<div class=" pt-24 pb-12">
    <div class="flex flex-col gap-6 max-w-[670px] m-auto text-center">
        <?php the_field('program_section_content') ?>
        <div class="flex justify-center">
            <svg width="131" height="44" viewBox="0 0 131 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_349_1955" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44" y="0" width="43" height="44">
                <path d="M44 0.200214H87V43.2002H44V0.200214Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_349_1955)">
                <path d="M49.2911 23.7158L65.5001 39.8408L81.7091 23.7158C93.3549 12.07 77.146 -4.05502 65.5001 7.59083C53.8542 -4.05502 37.6453 12.07 49.2911 23.7158Z" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <path d="M51.5 21.9346H58.8906M58.8906 21.9346L60.9062 18.5752L65.6094 25.9658L71.6562 13.2002L76.3594 21.9346M58.8906 21.9346H1M76.3594 21.9346H85.0937M76.3594 21.9346H129.5" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>
<div class="">
    <div class="container">
    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-x-6">
            <?php 
                $all_post = new wp_Query([
                    'post_type' => 'program',
                    'posts_per_page' => -1
                ]);
                while($all_post->have_posts()){
                    $all_post->the_post();
                    get_template_part('template-parts/program-card');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php 
    if( get_field('section_content')){
?>
<div class="pt-24 pb-12">
    <div class="flex flex-col gap-6 max-w-[670px] m-auto text-center">
        <?php the_field('section_content') ?>
        <div class="flex justify-center">
            <svg width="131" height="44" viewBox="0 0 131 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_349_1955" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44" y="0" width="43" height="44">
                <path d="M44 0.200214H87V43.2002H44V0.200214Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_349_1955)">
                <path d="M49.2911 23.7158L65.5001 39.8408L81.7091 23.7158C93.3549 12.07 77.146 -4.05502 65.5001 7.59083C53.8542 -4.05502 37.6453 12.07 49.2911 23.7158Z" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <path d="M51.5 21.9346H58.8906M58.8906 21.9346L60.9062 18.5752L65.6094 25.9658L71.6562 13.2002L76.3594 21.9346M58.8906 21.9346H1M76.3594 21.9346H85.0937M76.3594 21.9346H129.5" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>
<?php 
    }
?>
 <div class="">
    <div class="container">
        <?php 
            get_template_part('template-parts/service-card');
        ?>
    </div>
</div>
<?php 
    if( get_field('testimonial_sec_content')){
?>
<div class="pt-24 pb-12">
    <div class="flex flex-col gap-6 max-w-[670px] m-auto text-center">
        <?php the_field('testimonial_sec_content');?>
        <div class="flex justify-center">
            <svg width="131" height="44" viewBox="0 0 131 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_349_1955" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44" y="0" width="43" height="44">
                <path d="M44 0.200214H87V43.2002H44V0.200214Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_349_1955)">
                <path d="M49.2911 23.7158L65.5001 39.8408L81.7091 23.7158C93.3549 12.07 77.146 -4.05502 65.5001 7.59083C53.8542 -4.05502 37.6453 12.07 49.2911 23.7158Z" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <path d="M51.5 21.9346H58.8906M58.8906 21.9346L60.9062 18.5752L65.6094 25.9658L71.6562 13.2002L76.3594 21.9346M58.8906 21.9346H1M76.3594 21.9346H85.0937M76.3594 21.9346H129.5" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>
<?php 
    }
?> 
<div class="">
    <div class="container">
        <div class="">

        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-y-5
        gap-x-5">
            <?php  
                $testimonial = new WP_Query( array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 3
                ));
                while($testimonial->have_posts()){
                    $testimonial->the_post();
                    get_template_part('template-parts/testimonial-card');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<div class="py-12">
    <div class="container">
        <div class="grid grid-cols-2 gap-4 max-w-[968px] m-auto">
            <div class="w-[358px] h-[455]">
            <?php 
                $id = get_field('image');
                echo wp_get_attachment_image( $id, 'full', false, array());
            ?>
            </div>
            <div class="">
                <div class="flex flex-col gap-4">
                    <h5 class="text-primary">
                        <?php
                            $title1 = get_field('title1');
                            print_r($title1);
                        
                        ?>
                    </h5>
                    <h1 class=" leading-[65px]">
                        <?php the_field('title2');?>
                    </h1>
                    <p>
                        <?php the_field('description');?>
                    </p>
                    <div class="mt-3">
                        <?php 
                            $button = get_field('button');

                        ?>
                        <a class="btn btn-primary rounded-[50px]" href="<?php echo $button['url'];?>">
                            <?php echo $button['title']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-10">
    <div class="container">
        <div class="flex flex-col gap-6 max-w-[670px] m-auto text-center">
            <?php the_field('blog_content'); ?>
            <div class="flex justify-center">
                <svg width="131" height="44" viewBox="0 0 131 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_349_1955" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44" y="0" width="43" height="44">
                    <path d="M44 0.200214H87V43.2002H44V0.200214Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_349_1955)">
                    <path d="M49.2911 23.7158L65.5001 39.8408L81.7091 23.7158C93.3549 12.07 77.146 -4.05502 65.5001 7.59083C53.8542 -4.05502 37.6453 12.07 49.2911 23.7158Z" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <path d="M51.5 21.9346H58.8906M58.8906 21.9346L60.9062 18.5752L65.6094 25.9658L71.6562 13.2002L76.3594 21.9346M58.8906 21.9346H1M76.3594 21.9346H85.0937M76.3594 21.9346H129.5" stroke="#172430" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <div class="py-10">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-y-5
        gap-x-5">
            <?php  
                $blogpage = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ));
                while($blogpage->have_posts()){
                    $blogpage->the_post();
                    get_template_part('template-parts/postcard');
                }
                
            ?>
        </div>
        <div class="text-center mt-8">
            <a class="btn btn-primary" href="<?php echo home_url('/blog')?>">
                <?php echo esc_html__('See All Post', 'wptheme'); ?>
            </a>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>



