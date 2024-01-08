<?php
/**
 * TemplateName: Новости
 */
?>
<?php get_header();?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

    <section class="news">
    <div class="container">
        <h1 class="news__title title"><?php post_type_archive_title()?></h1>

        <div class="news-block">

            <?php
                global $post;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $news = new WP_Query([
                    'post_type' => 'news',
                    'posts_per_page' => '8',
                    'paged' => $paged,
                ])
            ?>
            <?php if( $news->have_posts()) : while($news->have_posts()) : $news->the_post();?>
            <div class="news-block__item">
                <div class="news-block__item-img">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img">
                </div>
                <div class="news-block__item-title"><?php the_title();?></div>
                <a href="<?php the_permalink()?>" class="news-block__item-link">
                    <img src="<?php echo get_template_directory_uri()?>./assets/images/home/news-arrows.svg" alt="img">
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
                    'total' => $news->max_num_pages,
                    'prev_text'    => __('« Назад'),
                    'next_text'    => __('Вперёд »'),
                ) );
                ?>
            </div>
        
    </div>
    </section>

</main>
<?php get_footer();?>