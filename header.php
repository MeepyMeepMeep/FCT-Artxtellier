<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>

<header>

    <div class="at--header__container">
        <div class="at--left__container">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
            ?>

            <?php wp_nav_menu(
                array(
                'theme_location' => 'menu-header',
                'menu_class' => 'at--headernav mplusr1c',
                    )
            );?>
            <?php get_search_form() ?>
        </div>
        <div class="at--account__container">
            <button type="button" class="at--button__header"><a href="http://artxtellier.local/access/" class="mplusr1c">Sign In</a></button>
        </div>
    </div>

</header>

    
