

<div class="at--container">

    <img src="<?php echo get_template_directory_uri(  )?>/img/artxtellier-logo-full.png" 
    alt="Artxtellier logo." class="at--info__logo d-block mx-auto">

    <h1 class="jua text-center mt-4 mb-4">
        An explosion of creativity not seen elsewhere.
        <br>
        Join our growing artistic community now!
    </h1>

    <div class="at--centered_container">
        <a href="http://artxtellier.local/access/?action=register/">
            <button class="jua at--button__join">Join now!</button>
        </a>
    </div>

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
  
        <?php
            endif;
            endwhile;
                wp_reset_postdata();
            else :
                echo '<h2 class"jua text-center">No posts found.</h2>';
            endif;
        ?>
    </div>
        <h2 class="jua text-center">And many more!</h2>
</div>