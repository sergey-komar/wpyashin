<?php
/**
 * TemplateName: Интенсивы
 */
?>
<?php get_header();?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

    
    <section class="events-page">
        <div class="container">
            <h1 class="events-page__title title"><?php post_type_archive_title()?></h1>
            <div class="events-page__block">
                <?php
                    global $post;
                    $intensives = new WP_Query([
                        'post_type' => 'intensives',
                        'posts_per_page' => '8',
                        'paged' => $paged,
                       
                    ])
                ?>
                <?php if( $intensives->have_posts()) : while($intensives->have_posts()) : $intensives->the_post();?>
                <div class="events-page__item">
                    <div class="events-page__item-title"><?php the_title();?></div> 
                    <a href="<?php the_permalink()?>" class="events-page__item-link">
                         <img src="<?php echo get_template_directory_uri()?>./assets/images/home/news-arrows.svg" alt="">
                    </a>
                </div>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();?>
            
                    
            </div>

            <div class="pagination">
                <?php
                $big = 999999999; // need an unlikely integer

                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $intensives->max_num_pages,
                    'prev_text'    => __('« Назад'),
                    'next_text'    => __('Вперёд »'),
                ) );
                ?>
            </div>
        </div>
    </section>
    


</main>
<?php get_footer();?>