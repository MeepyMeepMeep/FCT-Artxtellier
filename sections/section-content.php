<!-- Sección que muestra el contenido de un post -->

<?php if(have_posts () ) : while( have_posts() ): the_post(); ?>

    <span class="mplusr1c"><?php the_content(); ?></span>

<?php endwhile; else: endif; ?>