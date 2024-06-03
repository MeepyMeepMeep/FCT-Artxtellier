<?php get_header();?>

<?php 

$author = get_queried_object();
if($author):
?>


<div class="at--profile-header">
    <div class="at--centered_container">
        <div class="at--profile-header__content">
            <?php echo get_avatar($author->ID, 250);?>
        
            <div class="at--profile-header__info">
                <h2><?php echo get_the_author_firstname(); ?> <?php echo get_the_author_lastname(); ?></h2>
                <p class="mplusr1c">@<?php echo get_the_author_nickname(); ?></p>
                <a class="mplusr1c" href="<?php echo get_the_author_url(); ?>"></a>
                <p class="mplusr1c"><?php echo get_the_author_description()?> </p>
            </div>
        </div>
    </div>
</div>

<div class="at--centered_container">
    <?php if (have_posts()):
        while (have_posts()): the_post();
    endwhile;
    endif;
    ?>
</div>


<?php endif;
get_footer();?>