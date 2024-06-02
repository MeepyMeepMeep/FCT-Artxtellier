<!-- Plantilla que se visualizará a la hora de abrir el sitio web. -->

<?php get_header();?>

<?php if(is_user_logged_in()):
   get_template_part('sections/section', 'fploggedin');
else:
    get_template_part('sections/section', 'fploggedout');
endif;?> 

<?php get_footer(); ?>