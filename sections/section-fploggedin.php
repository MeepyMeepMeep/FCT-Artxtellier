<div class="at--container">

        <h1 class="jua text-center">
            LATEST
        </h1>
        <h2 class="jua text-center mt-3">
            See what's cooking on Artxtellier and get updated on the latest additions!
        </h2>

    <div class="at--grid">
        <?php
            /* Creamos un filtro para pasarlo a un WP_Query*/
            $posts = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 12,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $posts_recientes = new WP_Query($posts);

            if ($posts_recientes -> have_posts()):
                while ($posts_recientes -> have_posts()): $posts_recientes ->the_post();

                $image = get_the_post_thumbnail(get_the_ID(), 'large');
                $title = get_the_title();

            ?>
            <?php if(has_post_thumbnail()):?>
                <div class="at--miniatura">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $image ?>
                        <div class="jua at--author__overlay">
                            <p> <?php echo get_the_author() ?> </p>
                        </div>               
                    </a>
                </div>
  
            <?php endif;
            endwhile;
                wp_reset_postdata();     
            else :
                echo '<h2 class"jua text-center">No posts found.</h2>';
            endif;
            ?>
    </div>
</div>