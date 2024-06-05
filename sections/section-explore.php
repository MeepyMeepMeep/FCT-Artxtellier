<div class="at--container">

        <h1 class="jua text-center">
            EXPLORE
        </h1>
        <h2 class="jua text-center mt-3">
            Curious about what everyone else is creating? Let's see!
        </h2>

    <div class="at--grid__container">
        <?php 
            /* Creamos un filtro para pasarlo a un WP_Query*/
            $posts = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 24,
                'orderby' => 'rand',
                'order' => 'DESC',
            );

            $latest_posts = new WP_Query( $posts );

            if ( $latest_posts -> have_posts() ):
                while ( $latest_posts -> have_posts() ): $latest_posts ->the_post();

                $image = get_the_post_thumbnail( get_the_ID(), 'large' );
                $title = get_the_title();

        ?>
        <?php if( has_post_thumbnail() ):?>
            <div class="at--thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php echo $image ?>
                    <div class="jua at--author__overlay">
                        <p> <?php echo get_the_author(); ?> </p>
                    </div>               
                </a>
            </div>
  
        <?php endif; 
        endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="mplusr1c text-center">No posts found.</p>';
        endif;
        ?>
    </div>
    <div class="at--centered__container">
        <a href="http://artxtellier.local/explore">
            <button class="jua at--join__button">More!</button>
        </a>
    </div>

</div>