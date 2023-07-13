<?php 

get_header();
?>
<div class="py-10">
    <div class="container">
        <div class="flex items-start justify-between max-w-[1365px] mx-auto gap-8 lg:gap-12 flex-col-reverse md:flex-row">
            <div class="flex flex-col gap-y-5 max-w-[581px] w-full program-content">
                <h4 class="text-primary"><?php the_field('branch');?></h4>
                <?php the_field('section_content');?> 
                <div class="flex flex-wrap items-center gap-x-5">
                    <label class="service-input">
                        <input type="radio" name="service" checked="checked">
                        <span>Regular Course</span>
                    </label>
                    <label class="service-input">
                        <input type="radio" name="service">
                        <span>Exam Batch</span>
                    </label>
                </div>
                <div class="">
                    <a class="btn btn-secondary mt-2" href="">
                        Enroll Now
                    </a>
                </div>
            </div>
            <div class="program owl-carousel overflow-hidden">
                <?php 
                    while(have_rows('section_slider')){
                        the_row();
                ?>
                <div class="">
                <?php 
                    $id = get_sub_field( 'image' );
                    echo wp_get_attachment_image( $id, 'full', false, [
                        'class' => 'w-full h-full object-cover top-0 left-0'
                    ] );
                ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="pt-10">
            <div class="max-w-[590px]">
                <ul class="P-details-list grid sm:grid-cols-2 gap-y-6 text-center text-heading text-xl">
                    <li data-tab=".program-detail-tab" class="border-b-4 border-background pb-5 transition-all duration-300 nav-link  cursor-pointer font-medium"><?php echo esc_html__('প্রোগ্রাম ডিটেইলস', 'wpmedico' ) ?></li>
                    <li data-tab=".program-material-tab" class="border-b-4 border-background pb-5 transition-all duration-300 nav-link cursor-pointer font-medium"><?php echo esc_html__('স্টাডি ম্যাটেরিয়ালস', 'wpmedico' ) ?></li>
                </ul>
            </div>
            <div class="programs-details-blog tab-content active program-detail-tab pt-8">
            <?php
                    while( have_rows('accordion') ){
                        the_row();
                        
                    ?>
                <div class="border p-5 my-6 bg-backgrfound rounded max-w-[590px]">
                    <h6 class="accordion-title relative text-lg font-semibold ">
                        <?php the_sub_field('accordion_title'); ?>  
                    </h6>
                    <div class="accordion-content text-peraghaph pl-5 pt-8 prose">
                    <?php the_sub_field('accordion_content'); ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="tab-content program-material-tab pt-10">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                <?php 
                    while(have_rows('gallery_image')){
                        the_row();
                ?>
                <div class="max-w-sm object-cover left-0 p-10 bg-[#EBF6F6] relative group overflow-hidden">
                    <?php 
                        $id = get_sub_field( 'image' );
                        echo wp_get_attachment_image( $id, 'full', false, [
                            'class' => 'aspect-[6/8] max-w-sm group-hover:translate-y-[-15px] transition-all duration-200'
                        ] );
                    ?>
                    <div class="absolute left-1/2 -translate-x-1/2 group-hover:bottom-4 -bottom-11 transition-all duration-300">
                        <?php 
                            $button = get_sub_field('button');
                        ?>
                        <a target="_blank" class="btn btn-primary" href="<?php echo $button['url'];?>">
                            <?php echo $button['title']; ?>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>