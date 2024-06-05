<?php 
    get_header();

    $author = get_queried_object();
    if($author):?>

        <div class="at--profile-header">
            <div class="at--profile-header__content">
                <div class="at--profile-header__avatar">
                    <?php echo get_avatar($author->ID, 250);?>
                </div>
                <div class="at--profile-header__info">
                    <h2><?php echo get_the_author_firstname(); ?> <?php echo get_the_author_lastname(); ?>
                        <?php if (function_exists('get_favorites_button')):
                            echo get_favorites_button();
                        endif;?>
                    </h2>
                    <p class="mplusr1c">@<?php echo get_the_author_nickname(); ?> 
                        <br>
                        <a href="<?php the_author_url();?>">
                            <?php echo get_the_author_url(); ?>
                        </a>
                    </p>
                    <p class="mplusr1c-light"><?php echo get_the_author_description()?></p>
                </div>
            </div>
        </div>
        <div class="at--centered__container">
            <div class="at--author-grid__container">
                <div class="at--grid__container">
                    <?php
                    if (have_posts()) :

                        $paged = get_query_var('paged');
                        $author_id = $author-> ID;

                        $posts = array(
                            'author' => $author_id,
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged,
                        );

                        $author_posts = new WP_Query( $posts );

                        if ( $author_posts->have_posts() ) :
                            while ( $author_posts->have_posts() ) : $author_posts->the_post();

                                if ( has_post_thumbnail() ) :?>
                                    <div class="at--thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(get_the_ID(), 'large');?>
                                            <div class="jua at--author__overlay">
                                                <p> <?php the_title() ?> </p>
                                            </div>               
                                        </a>
                                    </div>
                                <?php endif;
                            endwhile;?>
                </div>
            </div>    
        </div>

        <div class="at--centered__container">
            <div class="at--pagination">
                <?php if(get_previous_posts_link()):?>
                    <a href="<?php echo get_previous_posts_page_link();?>">
                        <button class="jua at--pagination__button">Previous</button>
                    </a>
                <?php endif;
                if(get_next_posts_link()):?>
                    <a href="<?php echo get_next_posts_page_link();?>">
                        <button class="jua at--pagination__button">Next</button>
                    </a>
                <?php endif;?>
            </div>
                <?php
                else :
                    echo '<p class="mplusr1c text-center"No posts by this author.</p>';
                endif;
                wp_reset_postdata(); 
            else :
                echo '<p class="mplusr1c text-center">No posts found.</p>';
            endif;
            ?>
        </div>
    <?php endif;

    get_footer();
?>