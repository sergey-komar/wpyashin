<?php
/**
 * TemplateName: Мероприятия
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
                    $events = new WP_Query([
                        'post_type' => 'events',
                        'posts_per_page' => '30',
                       
                    ])
                ?>
                <?php if( $events->have_posts()) : while($events->have_posts()) : $events->the_post();?>
                <div class="events-page__item">
                    <div class="events-page__item-title"><?php the_title();?></div> 
                    <a href="<?php the_permalink()?>" class="events-page__item-link">
                         <img src="<?php echo get_template_directory_uri()?>./assets/images/home/news-arrows.svg" alt="img">
                    </a>
                </div>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();?>
            
                    
            </div>
        </div>
    </section>
    


</main>
<?php get_footer();?>