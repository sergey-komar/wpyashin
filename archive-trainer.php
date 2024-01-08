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
                    'posts_per_page' => '30',
                    
                ])
            ?>
             <?php if( $trainer->have_posts()) : while($trainer->have_posts()) : $trainer->the_post();?>
            <div class="trainer-block__item">
                <div class="trainer-block__item-img">
                    <img src="<?php echo get_template_directory_uri()?>./assets/images/home/trainer.png" alt="img">
                </div>
                <div class="trainer-block__content">
                    <div class="trainer-block__content-title"><?php the_title();?></div>
                    <ul class="trainer-block__list">
                        <li class="trainer-block__list-item">
                            Лицензия тренера по работе с вратарями РФС
                        </li>
                        <li class="trainer-block__list-item">
                            3 года в Академии ФК «Мордовия»
                        </li>
                        <li class="trainer-block__list-item">
                            2 года тренер вратарей в ФШ «Штудгард»
                        </li>
                        <li class="trainer-block__list-item">
                            3 года старший тренер вратарей, главный судья турниров в «Школа Вратарей им.Л.Яшина»
                        </li>
                        <li class="trainer-block__list-item">
                            Профессиональный специалист по организации питания для спортсменов
                        </li>
                        <li class="trainer-block__list-item">
                            Профессиональный специалист по физической подготовке
                        </li>
                    </ul>
                    <div class="trainer-block__content-text">
                        На первое место ставит психологию и эмоциональную составляющую тренировки. Основная цельв тренировке - воспитать лидера.
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
            
        </div>
    </div>
    </section>

</main>
<?php get_footer();?>