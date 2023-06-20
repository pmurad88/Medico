
<h2 >
    <?php 
        $comments_num = get_comments_number();
        if( 1 == $comments_num ){
            echo esc_html__("1 Comment", "wptheme");
        }else{
            echo $comments_num . esc_html__(" Comment", "wptheme");
        }
    ?>
</h2>

<?php 
    comment_form();
    wp_list_comments();
?>