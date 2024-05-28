<!-- Plantilla que se visualizará a la hora de abrir el sitio web. -->

<?php get_header();?>

<div class="container at--container_tiny">
    <h1 class="jua jua--post__title"><?php the_title();?></h1>
    <!-- Este trozo de código llama a una plantilla ('carpeta/1era parte del nombre', '2da parte del nombre') -->
    <?php get_template_part('sections/section', 'content'); ?>
</div>

<?php get_footer(); ?>