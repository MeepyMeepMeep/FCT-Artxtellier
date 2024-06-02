<!-- Plantilla que se visualizará a la hora de visualizar publicaciones individuales. -->

<?php get_header();?>



<?php
    if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $image = get_the_post_thumbnail_url();
                $title = get_the_title();
                $description = get_the_content();
                $author = get_the_author();
                $author_url = get_the_author_posts_link();
                $date = get_the_date();

?>
        <div class="at--centered_container">   
            <div class="at--post__container">
                <div class="at--postimage__container">
                    <img src="<?php echo $image ?>" alt="Image of <?php echo $title ?>"></img>
                </div>
                <div class="at--postcontent__container">
                    <div class="at--posttitle">
                        <h2><?php echo $title ?></h2>
                        <p class="mplusr1c"> by <?php echo $author_url?></a></p>
                    </div>
                    <hr>
                    <p class="mplusr1c"><?php echo $description ?></p>
                    <hr>
                    <p class="mplusr1c"><?php echo $date ?></p>
                </div>
            </div>
        </div>  

<?php
            endwhile;
    endif;
?>



<?php get_footer();?>