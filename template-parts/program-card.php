<div class="">
    <div class="flex flex-col gap-10 bg-background hover:bg-white hover:drop-shadow-2xl rounded-b-2xl pb-10 transition-all">
        <a class="" href="">
            <?php the_post_thumbnail('', array(
                'class' => 'rounded-2xl'
            ));?>
        </a>
        <div class="custom-postcord flex flex-col gap-6 px-10 ">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <div class="">
                <div class="btn btn-success mb-2 mr-3">
                    <a href="<?php the_permalink();?>">
                        Details & Routine
                    </a>
                </div>
                <div class="btn btn-secondary">
                    <a href="">
                        Enroll Now
                    </a>
                </div>
            </div> 
        </div>
    </div>
</div>