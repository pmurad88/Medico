<?php 

get_header();
?>

<div class="pt-16">
    <div class="container">
        <div class="flex flex-col sm:flex-row gap-x-12 gap-y-6">
            <div class="w-full max-w-[430px]">
                <h4><?php the_title(); ?></h4>
                <ul class="pt-5 flex flex-col gap-4 text-content">
                    <li>
                        <a class="flex items-center gap-3" href="">
                            <svg class="text-primary w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M24 13h-2a3.003 3.003 0 0 0-3-3V8a5.006 5.006 0 0 1 5 5Z"></path><path fill="currentColor" d="M28 13h-2a7.008 7.008 0 0 0-7-7V4a9.01 9.01 0 0 1 9 9zm-7.667 8.482l2.24-2.24a2.167 2.167 0 0 1 2.337-.48l2.728 1.092A2.167 2.167 0 0 1 29 21.866v4.961a2.167 2.167 0 0 1-2.284 2.169C7.594 27.806 3.732 11.61 3.015 5.408A2.162 2.162 0 0 1 5.169 3h4.873a2.167 2.167 0 0 1 2.012 1.362l1.091 2.728a2.167 2.167 0 0 1-.48 2.337l-2.24 2.24s1.242 8.732 9.908 9.815z"></path>
                            </svg>
                            <span class="flex-1"><?php the_field('phone_number'); ?></span>
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="text-primary w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M11.291 21.706L12 21l-.709.706zM12 21l.708.706a1 1 0 0 1-1.417 0l-.006-.007l-.017-.017l-.062-.063a47.708 47.708 0 0 1-1.04-1.106a49.562 49.562 0 0 1-2.456-2.908c-.892-1.15-1.804-2.45-2.497-3.734C4.535 12.612 4 11.248 4 10c0-4.539 3.592-8 8-8c4.408 0 8 3.461 8 8c0 1.248-.535 2.612-1.213 3.87c-.693 1.286-1.604 2.585-2.497 3.735a49.583 49.583 0 0 1-3.496 4.014l-.062.063l-.017.017l-.006.006L12 21zm0-8a3 3 0 1 0 0-6a3 3 0 0 0 0 6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1"><?php the_field('location'); ?></span>
                    </li>
                </ul>
            </div>
            <div class="sm:w-[1px] h-[1px] sm:h-auto bg-black"></div>
            <div class="w-full max-w-[714px] prose prose-headings:text-2xl">
                <?php the_field('about_us'); ?>
            </div>
        </div>
        <div class="pt-10">
            <?php the_field('google_map'); ?>
        </div>
    </div>
</div>
<div class="">
    <div class="container">
        <div class="py-16">
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
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php 
                $gallery_image = get_field('photo_gallery');

                foreach($gallery_image as $image){?>
                    <div class=" group overflow-hidden ">
                        <?php 
                            echo wp_get_attachment_image($image, 'postcard', false, [
                                'class' => 'w-full h-full object-cover duration-300 group-hover:scale-110'
                            ]);
                         
                        ?>
                    </div>
            
            <?php }?>
        </div>
    </div>
</div>


<?php get_footer(); ?>