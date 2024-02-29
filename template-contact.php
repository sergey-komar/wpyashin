<?php
/**
 * Template Name: Контакты
 */
?>
<?php get_header();?>

<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

    <section class="contact">
        <div class="container">
            <h1 class="contact__title title">Контакты</h1>
            <div class="contact-block">
                <div class="contact-block__info">
                    <div class="footer-block__item">
                        <div class="footer-block__info address-contact">
                        <div class="footer-block__info-text">Адрес</div>
                        <div class="footer-block__info-address">
                        <?php the_field('podval_adres', 'options');?>
                        </div>
                        </div>

                        <div class="footer-block__info phone-contact">
                        <div class="footer-block__info-text">Телефон</div>
                        <a href="tel:<?php the_field('podval_telefon_ssylka', 'options');?>" class="footer-block__info-link">
                        <?php the_field('podval_telefon', 'options');?>
                        </a>
                        </div>

                        <div class="footer-block__info email-contact">
                        <div class="footer-block__info-text">Почта</div>
                        <a href="mailto:<?php the_field('podval_pochta', 'options');?>" class="footer-block__info-link">
                        <?php the_field('podval_pochta', 'options');?>
                        </a>
                        </div>
                    </div>
                </div>

                <div class="contact-block__map">
                   <div class="contact-block__map-img">
                   <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2a291213facf7d8ea930030378b7970931d75738d17fd4c9fbc5b63706833b80&amp;source=constructor"  frameborder="0"></iframe>
                   </div> 
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>