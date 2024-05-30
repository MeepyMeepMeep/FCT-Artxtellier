<!-- Plantilla que se visualizará a la hora de surgir errores 404. -->

<?php get_header();?>

    <div class="at--centered_container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/artxtellier-logo512x512-black.png" class="at--404img"/>
        <div class="at--404text">
            <h1 class="jua">404 Not Found</h1>
            <p class="mplusr1c">The content you were looking for is nowhere to be found.
            <br> 
            Please try again.  
            </p>
            <p></p>
        </div>
    </div>

<?php get_footer(); ?>