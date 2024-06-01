<!-- Plantilla que se visualizará a la hora de abrir el sitio web. -->

<?php get_header();?>

<div class="at--container">

    <img src="<?php echo get_template_directory_uri(  )?>/img/artxtellier-logo-full.png" 
    alt="Artxtellier logo." class="at--info__logo d-block mx-auto">

    <h1 class="jua text-center mt-3">An explosion of creativity not seen elsewhere.
    <br>
    Join our growing artistic community now!</h1>

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

                /* Nos interesa que el post contenga imágenes */
                $content = get_the_content( );
                $with_images = strpos($content, '<img') !==false;

                if ($with_images):
                    /* Creamos un array de imágenes disponibles en un post 
                    para elegir la primera (Principal) y renderizarla*/ 
                    $images = get_posts(array(
                        'post_type' => 'attachment',
                        'posts_per_page' => 1,
                        'post_parent' => get_the_ID(),
                        'post_mime_type' => 'image',
                    ));
                    
        
        ?>

        <div class="at--miniatura">
            <a href="<?php the_permalink(); ?>">
                <?php

                    if (!empty($images)):
                        
                        echo wp_get_attachment_image( $images[0] -> ID, 'large');
                        
                    endif;
                ?>
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

<?php get_footer(); ?>