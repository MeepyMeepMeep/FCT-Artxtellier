<!-- Plantilla que se visualizará a la hora de mostrar resultados de búsqueda. -->

<?php get_header();

$search_query = get_search_query();
if ($search_query):
?>


<div class="at--centered_container">
    
    <div class="at--search__container">
        <h2 class="jua text-center"> Search results for "<?php echo $search_query?>"</h2>
        <h2 class="jua">Users</h2>
        <hr>

        <div class="at--search__grid">
            <?php
            $user_args = array(
                'search' => '*' . esc_attr($search_query) . '*',
                'search_columns' => array('display_name', 'user_nicename'),
                'number' => 24,
            );

            $users_query = new WP_User_Query($user_args);

            if (!empty($users_query->get_results())) :
                foreach ($users_query->get_results() as $user) :?>
                    <div class="at--search__miniatura">
                        <a href="<?php echo get_author_posts_url($user->ID); ?>">
                            <?php echo get_avatar($user->ID, 200);?>
                        </a>
                    </div>
                <?php
                endforeach;
                else :
                    echo '<p>No users found.</p>';
            endif;
            ?>
        </div>
        <h2 class="jua">Artworks</h2>
        <hr>
        <div class="at--search__grid">
            <?php
            /* Creamos una query que tenga en cuenta el resultado de busqueda */
            $artwork_args = array(
                's' => $search_query,
                'post_type' => 'post',
                'posts_per_page' => 12,
            );

            $artworks_query = new WP_Query($artwork_args);

            if ($artworks_query->have_posts()) :
                while ($artworks_query->have_posts()) : $artworks_query->the_post();
                    $image = get_the_post_thumbnail(get_the_ID(), 'large');
                    $title = get_the_title();

                    if(has_post_thumbnail()):?>
                        <div class="at--search__miniatura">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo $image ?>
                            </a>
                        </div>
                    <?php
                    endif;
                endwhile;
                ?>
        
                <?php
                wp_reset_postdata();
                else :
                echo '<p>No artworks found.</p>';
            endif;
            ?>
        </div>
    </div>
<?php
else:
    echo '<h2 class="jua text-center">Please enter a valid search term.</h2>';
endif;?>
</div>

<?php get_footer();?>