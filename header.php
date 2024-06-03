<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header>

    <div class="at--header__container">
        <div class="at--header-elements__container">
            <div class="at--left__container">
                <?php
                    if ( function_exists( 'the_custom_logo' )) :
                        the_custom_logo();
                endif;
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
                <?php if(is_user_logged_in()):
                    $current_user = wp_get_current_user();
                    $user_nickname =  $current_user->nickname;
                    $user_url = get_author_posts_url($current_user->ID);
                    $user_edit = get_edit_profile_url($current_user->ID);
                ?>   
                <a href="<?php echo $user_url ?>" class="mplusr1c at--headernav at--account_link"><?php echo $user_nickname ?></a>    
                <a href="<?php echo $user_edit ?>" class="at--account_link"><i class="fa-solid fa-gear"></i></a>
                <a href="<?php echo wp_logout_url(home_url()); ?>" class="at--account_link"><i class="fa-solid fa-right-from-bracket"></i></a>
                <a href="http://artxtellier.local/wp-admin/post-new.php/">
                    <button type="button" class="at--button__header mplusr1c">Upload <i class="fa-solid fa-plus"></i></button>
                </a> 
            </div>
            <?php else: ?>
            <div class="at--account__container">    
                <a href="http://artxtellier.local/access/">
                    <button type="button" class="at--button__header mplusr1c">Access</button>
                </a>
            </div>
                <?php endif;?> 
        </div>
    </div>

</header>

    
