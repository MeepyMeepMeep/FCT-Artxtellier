<?php
/*
Template Name: Information (about, legal...)
*/

?>

<?php get_header();?>
<div class="at--information__body">
    <div class="container p-5">
        <img src="<?php echo get_template_directory_uri(  )?>/img/artxtellier-logo-full.png" alt="Artxtellier logo." class="at--info__logo d-block mx-auto">
        <h1 class="jua text-center mt-5 mb-3"><?php the_title();?></h1>
        <!-- Este trozo de código llama a una plantilla ('carpeta/1era parte del nombre', '2da parte del nombre') -->
        <?php get_template_part('sections/section', 'content'); ?>
    </div>
</div>
<?php get_footer();?>
