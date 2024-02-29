<?php
/**
 * TemplateName: Тренеры
 */
?>
<?php get_header();?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

    <section class="trainer">
        <div class="container">
            <h1 class="trainer__title title"><?php post_type_archive_title()?></h1>
            <div class="trainer-block">
                <?php
                    global $post;
                    $trainer = new WP_Query([
                        'post_type' => 'trainer',
                        'posts_per_page' => '8',
                        'paged' => $paged,
                        
                    ])
                ?>
                <?php if( $trainer->have_posts()) : while($trainer->have_posts()) : $trainer->the_post();?>
                <div class="trainer-block__item">
                    <div class="trainer-block__item-img">
                        <img src="<?php echo get_template_directory_uri()?>./assets/images/home/trainer.png" alt="">
                    </div>
                    <div class="trainer-block__content">
                        <div class="trainer-block__content-title"><?php the_title();?></div>
                        <ul class="trainer-block__list">
                            <?php if(have_rows('trenery_spisok')) : while(have_rows('trenery_spisok')) : the_row();?>
                            <li class="trainer-block__list-item">
                            <?php the_sub_field('trenery_spisok_tekst');?>
                            </li>
                            <?php endwhile; endif;?>
                        </ul>
                        <div class="trainer-block__content-text">
                           <?php the_field('trenery_tekst')?>
                        </div>
                    
                    </div>
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
                    'total' => $trainer->max_num_pages,
                    'prev_text'    => __('« Назад'),
                    'next_text'    => __('Вперёд »'),
                ) );
                ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer();?>