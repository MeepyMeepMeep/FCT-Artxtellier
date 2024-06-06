<!-- Plantilla que se visualizará a la hora de visualizar publicaciones individuales. -->

<?php 
    get_header();

    $logged_user = wp_get_current_user();
    $current_post_author_id = get_the_author_meta('ID');

    if (have_posts()) :
        while (have_posts()) : the_post();
            $image = get_the_post_thumbnail_url();
            $title = get_the_title();
            $description = get_the_content();
            $author = get_the_author();
            $author_url = get_the_author_posts_link();
            $date = get_the_date();
    ?>

    <div class="at--centered__container">   
        <div class="at--post__container">
            <div class="at--post-image__container">
                <img src="<?php echo $image ?>" alt="Image of <?php echo $title ?>"></img>
            </div>
            <div class="at--post-content__container">
                <?php 
                    if (function_exists( 'get_favorites_button' ) ):
                        echo get_favorites_button();
                    endif;
                ?>
                <div class="at--post__title">
                    <h2><?php echo $title ?></h2>
                    <p class="mplusr1c"> by <?php echo $author_url?></p>
                </div>
                <hr>
                <p class="mplusr1c"><?php echo $description ?></p>
                <hr>
                <p class="mplusr1c"><?php echo $date ?> <?php edit_post_link(('Edit')); ?></p>
            </div>
        </div>
    </div>  

    <?php
        endwhile;
    endif;

    get_footer();
?>