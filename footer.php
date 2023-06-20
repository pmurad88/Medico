<div class="footer-widget py-10 bg-background">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-x-2 gap-y-8">
            <div class=" grid gap-4 ">
                <div class="grid gap-4 max-w-[400px]">
                    <?php dynamic_sidebar( 'footer_widget1' ) ?>
                </div>
                <div class="lg:mt-5 ">
                    <ul class="h-icon flex gap-6 text-2xl" >
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-x-16 gap-y-8">
                <div class="max-w-[295px]">
                    <?php dynamic_sidebar( 'footer_widget2' ) ?>
                </div>
                <div class="">
                    <?php dynamic_sidebar( 'footer_widget3' ) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-6 bg-background border-t border-secondary border-opacity-20">
    <div class="container ">
        <div class="text-center">
            <p class="text-heading text-[16px]"><?php echo esc_html__('Copyright © Medico Academic & Admission Care. All rights reserved. 2023', 'wpmedico'); ?></p>
        </div>
    </div>
</div>






</body>
</html>