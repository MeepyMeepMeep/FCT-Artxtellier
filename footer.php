<footer>


<div class="at--footer">
        <div class="at--footer__container">
                <?php
                    if ( function_exists( 'the_custom_logo' )):
                        the_custom_logo();
                endif;
                ?>

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-1',
                        'menu_class' => 'at--footernav mplusr1c',
                    )
                );?>

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-2',
                        'menu_class' => 'at--footernav mplusr1c',
                    )
                );?>
            
        </div>
</div>  
    <div class="at--footer2">
        <p class="text-center mplusr1c">Made with <i class="fa-solid fa-heart"></i> in Wordpress by 
        <a href="https://github.com/MeepyMeepMeep/FCT-Artxtellier">MeepyMeepMeep</a></p> 
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>