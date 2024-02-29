<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header('home');?>
  
     <main class="main main-home">
        <section class="heading" style="background: url('<?php the_field('pervyj_blok_kartinka');?>');" no-repeat;>
            <video class="heading__video" poster="<?php the_field('pervyj_blok_video_kartinka');?>">
            <source class="heading__video--video" src="<?php the_field('pervyj_blok_video');?>" type="video/mp4">
            </video>

            <div class="container">
            <div class="heading-block">
                <div class="heading-block__wrapper">
                <div class="heading-block__subtitle">
                <?php the_field('pervyj_blok_podzagolovok');?>
                </div>
                <h1 class="heading-block__title">
                <?php the_field('pervyj_blok_zagolovok');?>
                </h1>
                <div class="heading-block__text">
                <?php the_field('pervyj_blok_tekst');?>
                </div>
                </div>
                <div id="controls" class="hidden">
                <a href="#" class="heading-block--btn" id="playBtn">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/home/play-btn.png" alt="">
                </a>
                </div>
            </div>
            </div>
      </section> 
     
      <section class="happened">
        <div class="container">
          <div class="happened-block">
            <div class="happened-block__content">
              <h3 class="happened-block__content-title title">
              <?php the_field('yashinstyle_zagolovok');?>
              </h3>
              <?php if(have_rows('yashinstyle_tekst')) : while(have_rows('yashinstyle_tekst')) : the_row();?>
              <div class="happened-block__content-text">
                <p>
                <?php the_sub_field('yashinstyle_tekst_opisanie');?>
                </p>
              </div>
              <?php endwhile; endif;?>
            </div>
            
            <div class="happened-block__img">
              <img src="<?php the_field('yashinstyle_kartinka');?>">
            </div>
            
           
          </div>
        </div>
      </section>

      <section class="events">
        <div class="container">
          <h3 class="events__title title">Ближайшие мероприятия</h3>
          <div class="events-block">
              <?php
                  global $post;
                  $events = new WP_Query([
                      'post_type' => 'events',
                      'posts_per_page' => '4',
                      
                  ])
              ?>
              <?php if( $events->have_posts()) : while($events->have_posts()) : $events->the_post();?>
            <div class="events-block__item">
              <div class="events-block__item-title">
              <?php the_title();?>
              </div>
              <div class="events-block__item-date">
              <?php the_excerpt();?>
              </div>
              <a href="<?php the_permalink()?>" class="events-block__item-btn">
              Записаться на мероприятие
              </a>
            </div>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
           
          </div>

          <a href="<?php echo get_post_type_archive_link('events')?>" class="events-block__btn">Все мероприятия</a>
        </div>
      </section>

      <div class="intensive">
        <div class="container">
          <h3 class="intensive__title title">
          <?php the_field('intensiv_zagolovok');?>
          </h3>
          <div class="intensive-block">
            <div class="intensive-block__video">
              <video class="intensive__video" poster="<?php the_field('intensiv_video_kartinka');?>">
                <source src="<?php the_field('intensiv_video');?>" type="video/mp4">
              </video>
              <div id="controls" class="hidden">
                <a class="playBtn-1" id="playBtn-1">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/goalkeeper-play.png" alt="img">
                </a>
              </div>
            </div>
            <div class="intensive-block__content">
              <?php if(have_rows('intensiv_tekst')) : while(have_rows('intensiv_tekst')) : the_row();?>
              <div class="intensive-block__content-text">
              <?php the_sub_field('intensiv_tekst_opisanie');?>
              </div>
              <?php endwhile; endif;?>
              
            </div>
          </div>
         
        </div>
      </div>

      <div class="tournament" style="background: url('<?php the_field('turnir_izobrazhenie');?>'); no-repeat">
      
        <div class="container">
            <div class="tournament__title">
            <?php the_field('turnir_zagolovok');?>
            </div>
            <div class="tournament-box">
              <div class="tournament-box__text">
              <?php the_field('turnir_tekst');?>
              </div>
            </div>
        </div>
      </div>

      <div class="format">
        <div class="container">
          <div class="format-block">
            <div class="format-block__content">
              <h3 class="format__title title">
              <?php the_field('format_zagolovok');?>
              </h3>
              <div class="format-block__content-text">
              <?php the_field('format_tekst');?>
              </div>
              <a href="#" class="format-block__content-btn">Правила и положения турнира YashinCup</a>
            </div>

            <div class="format-block__video">
              <video class="format__video" poster="<?php the_field('format_video_kartinka');?>">
                <source src="<?php the_field('format_video');?>" type="video/mp4">
              </video>
              <div id="controls" class="hidden">
                <a class="playBtn-2" id="playBtn-2">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/goalkeeper-play.png" alt="img">
                </a>
              </div>
            </div>
          </div>
         
        </div>
      </div>

      <div class="prize-slider">
        <div class="container">
          <h3 class="prize-slider__title title">Призы и награды</h3>
          <div class="prize-slider__inner">
            <?php if(have_rows('prizy_element')) : while(have_rows('prizy_element')) : the_row();?>
            <div class="prize-slider__wrapper">
              <div class="prize-slider__img">
                <img src="<?php the_sub_field('prizy_element_kartinka');?>" alt="img">
              </div>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>
      </div>

      <div class="gallery">
        <div class="container">
          <h3 class="gallery__title title">Галерея</h3>
          <div class="gallery-block">
            <?php if(have_rows('galereya_element')) : while(have_rows('galereya_element')) : the_row();?>
            <a href="<?php the_sub_field('galereya_element_bolshaya_kartinka');?>" data-fancybox="gallery" class="gallery-block__img">
              <img src="<?php the_sub_field('galereya_element_malenkaya_kartinka');?>" alt="img">
            </a>
            <?php endwhile; endif;?>
        
          
          </div>
        </div>
      </div>
     
      <div class="reviews-slider">
        <div class="container">
          <h3 class="reviews-slider__title title">Отзывы</h3>
          <div class="reviews-slider__inner">
            <?php if(have_rows('otzyvy_element')) : while(have_rows('otzyvy_element')) : the_row();?>
            <div class="reviews-slider__wrapper">
              <div class="reviews-slider__img">
                <img src="<?php the_sub_field('otzyvy_element_kartinka');?>" alt="img">
              </div>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>
      </div>

    </main>
   
<?php get_footer();?>